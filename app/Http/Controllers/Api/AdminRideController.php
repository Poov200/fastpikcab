<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Commission;
use App\Notifications\TripStatusNotification;
use App\Services\FirebaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class AdminRideController extends Controller
{
   /**
     * 🔹 UPDATE TRIP STATUS (Fixed to accept Custom Commission)
     */
    public function updateStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'     => 'required|exists:bookings,id',
            'status' => 'required|in:completed,cancelled,assigned,pending',
            'amount' => 'nullable|numeric|min:0',
            // Add validation for commission if you want to be strict, but optional is fine
             'commission' => 'nullable|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => false,
                'message' => $validator->errors()->first()
            ], 422);
        }

        try {
            $booking = Booking::with(['driver', 'commission'])
                ->findOrFail($request->id);

            // 1. Update booking status & amount
            $booking->status = $request->status;
            if ($request->filled('amount')) {
                $booking->assigned_amount = $request->amount;
            }
            $booking->save();

            // 2. Handle Completion Logic
            if ($request->status === 'completed' && !$booking->commission) {

                // 🟢 USE CUSTOM COMMISSION IF SENT, ELSE DEFAULT TO 10%
                $commissionAmount = $request->filled('commission')
                    ? $request->commission
                    : ($booking->assigned_amount * 0.10);

                Commission::create([
                    'booking_id' => $booking->id,
                    'amount'     => $commissionAmount, // <--- Using the variable here
                    'status'     => 'unpaid'
                ]);

                if ($booking->driver) {
                    $title = 'Trip Completed ✅';
                    $msg   = 'Booking #' . $booking->booking_id . ' completed. Commission due: ₹' . $commissionAmount;

                    // DB Notification
                    try {
                        $booking->driver->notify(new TripStatusNotification(
                            $title, $msg, $booking, 'trip_completed'
                        ));
                    } catch (\Exception $e) {
                        Log::error('Notification error: ' . $e->getMessage());
                    }

                    // Firebase Push
                    if ($booking->driver->fcm_token) {
                        FirebaseService::sendNotification(
                            $booking->driver->fcm_token,
                            $title,
                            $msg,
                            [
                                'booking_id' => (string)$booking->id,
                                'type'       => 'trip_completed',
                                'commission' => (string)$commissionAmount
                            ]
                        );
                    }
                }
            }

            return response()->json([
                'status'  => true,
                'message' => 'Booking updated successfully',
                'data'    => $booking->load(['driver', 'commission'])
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Server error: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * 💰 UPDATE COMMISSION AMOUNT + NOTIFY DRIVER
     * Used from CompletedBookingDetailsPage (Save & Notify)
     */
    public function updateCommissionAndNotify(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'amount' => 'required|numeric|min:0'
        ]);

        try {
            $booking = Booking::with(['driver', 'commission'])
                ->findOrFail($request->booking_id);

            $commission = Commission::updateOrCreate(
                ['booking_id' => $booking->id],
                [
                    'amount' => $request->amount,
                    'status' => $booking->commission->status ?? 'unpaid'
                ]
            );

            // 💰 COMMISSION NOTIFICATION
            if ($booking->driver) {
                $title = 'Commission Due 💰';
                $msg = 'Please pay ₹' . $commission->amount .
                       ' commission for Booking #' . $booking->booking_id;

                // DB Notification
                $booking->driver->notify(
                    new TripStatusNotification(
                        $title,
                        $msg,
                        $booking,
                        'commission_notification'
                    )
                );

                // Firebase Push
                if ($booking->driver->fcm_token) {
                    FirebaseService::sendNotification(
                        $booking->driver->fcm_token,
                        $title,
                        $msg,
                        [
                            'booking_id' => (string)$booking->id,
                            'type' => 'commission_notification'
                        ]
                    );
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'Commission updated & driver notified',
                'data' => $commission
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * 🔹 UPDATE COMMISSION PAID / UNPAID
     */
    public function updateCommissionStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'booking_id' => 'required|exists:bookings,id',
            'status' => 'required|in:paid,unpaid',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ], 422);
        }

        $commission = Commission::where('booking_id', $request->booking_id)
            ->first();

        if (!$commission) {
            return response()->json([
                'status' => false,
                'message' => 'Commission record not found'
            ], 404);
        }

        $commission->status = $request->status;
        $commission->paid_date =
            $request->status === 'paid' ? Carbon::now() : null;

        $commission->save();

        return response()->json([
            'status' => true,
            'message' => 'Commission marked as ' . strtoupper($request->status)
        ]);
    }

    /**
     * 🔔 SEND MANUAL COMMISSION REMINDER
     */
    public function notifyCommission(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id'
        ]);

        $booking = Booking::with(['driver', 'commission'])
            ->findOrFail($request->booking_id);

        if (!$booking->driver || !$booking->commission) {
            return response()->json([
                'status' => false,
                'message' => 'Unable to send reminder'
            ], 400);
        }

        $title = 'Payment Reminder 💰';
        $msg = 'Please pay ₹' . $booking->commission->amount .
               ' commission for Booking #' . $booking->booking_id;

        $booking->driver->notify(
            new TripStatusNotification(
                $title,
                $msg,
                $booking,
                'commission_reminder'
            )
        );

        if ($booking->driver->fcm_token) {
            FirebaseService::sendNotification(
                $booking->driver->fcm_token,
                $title,
                $msg,
                [
                    'booking_id' => (string)$booking->id,
                    'type' => 'commission_reminder'
                ]
            );
        }

        return response()->json([
            'status' => true,
            'message' => 'Commission reminder sent'
        ]);
    }

    // 🔹 LISTING APIs

    public function all()
    {
        return response()->json([
            'status' => true,
            'data' => Booking::with(['driver', 'commission'])
                ->orderBy('id', 'desc')
                ->get()
        ]);
    }

    public function assigned()
    {
        return response()->json([
            'status' => true,
            'data' => Booking::with('driver')
                ->whereNotNull('driver_id')
                ->where('status', 'assigned')
                ->orderBy('id', 'desc')
                ->get()
        ]);
    }

    public function completed()
    {
        return response()->json([
            'status' => true,
            'data' => Booking::with(['driver', 'commission'])
                ->where('status', 'completed')
                ->orderBy('id', 'desc')
                ->get()
        ]);
    }

    public function unassigned()
{
    return response()->json([
        'status' => true,
        'data' => Booking::with(['driver', 'commission'])
            ->whereNull('driver_id')
            ->where('status', 'pending')
            ->orderBy('id', 'desc')
            ->get()
    ]);
}

}
