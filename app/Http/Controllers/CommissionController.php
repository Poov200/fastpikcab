<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use App\Models\Booking;
use App\Models\User; // Assuming Admin is a User
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Services\FirebaseService; // Your existing service
use App\Notifications\PaymentSubmittedNotification; // Create this
use App\Notifications\PaymentVerifiedNotification;  // Create this

class CommissionController extends Controller
{
    public function index()
    {
        $commissions = Commission::with(['booking.driver', 'booking.user'])
            ->whereHas('booking', function ($q) {
                $q->where('trip_status', 'completed');
            })
            ->orderBy('created_at', 'desc') // <--- Add this to show newest first
            ->get();

        // 👇 WRAP IT IN THIS FORMAT so Flutter can read it
        return response()->json([
            'status' => true,
            'data'   => $commissions
        ]);
    }

    public function store(Request $request)
    {
        $commission = Commission::updateOrCreate(
            ['booking_id' => $request->booking_id],
            [
                'amount' => $request->amount,
                'status' => $request->status,
                'paid_date' => $request->status == 'Paid' ? now() : null
            ]
        );
        $commission->load('booking.driver');
        return response()->json(['message' => 'Commission saved successfully', 'data' => $commission]);
    }

    public function completedBookings()
    {
        $completed = Booking::with(['driver', 'commission'])
            ->where('trip_status', 'completed')
            ->get();

        return response()->json($completed);
    }

    // ------------------------------------------------------------------
    // 🔹 DRIVER NOTIFIES ADMIN (Money Sent) - FIXED FOR STRING ID
    // ------------------------------------------------------------------
    public function notifyPayment(Request $request)
    {
        // 1. Validate
        $request->validate([
            'booking_id' => 'required',
            'amount'     => 'required|numeric'
        ]);

        // 2. Find Booking
        $booking = Booking::where('booking_id', $request->booking_id)->first();
        if (!$booking) {
            return response()->json(['status' => false, 'message' => 'Invalid Booking ID'], 404);
        }

        // 3. Find Commission
        $commission = Commission::with('booking.driver')
            ->where('booking_id', $booking->id)
            ->first();

        if (!$commission) {
            return response()->json(['status' => false, 'message' => 'Commission not found'], 404);
        }

        // 4. Update Status (If not already paid)
        if ($commission->status !== 'Paid') {
            $commission->update([
                'amount'    => $request->amount,
                'paid_date' => now(),
                'status'    => 'Pending'
            ]);
        } else {
            return response()->json(['status' => false, 'message' => 'Commission already paid']);
        }

        // 5. 🔔 NOTIFY ADMIN
        try {
            // A. Get the Admin
            $admin = DB::table('app_admins')->first();

            if ($admin) {
                // B. Save to Database (FIXED to match your Migration)
                DB::table('notifications')->insert([
                    'id'              => Str::uuid()->toString(),         // Required: UUID
                    'type'            => 'App\Notifications\PaymentSubmittedNotification', // Notification Name
                    'notifiable_type' => 'App\Models\AppAdmin',           // Who is getting it? (Class Name)
                    'notifiable_id'   => $admin->id,                      // The Admin ID
                    'data'            => json_encode([                    // JSON Data
                        'title'      => 'Payment Received 💰',
                        'message'    => 'Driver sent ₹' . $request->amount . ' for Booking ' . $request->booking_id,
                        'booking_id' => $request->booking_id,
                        'amount'     => $request->amount,
                        'type'       => 'commission_payment'
                    ]),
                    'read_at'         => null,
                    'created_at'      => now(),
                    'updated_at'      => now(),
                ]);

                // C. Send Push Notification
                // NOTE: Your app_admins migration does NOT have 'fcm_token'.
                // If you haven't added it manually, this part will be skipped.
                $adminToken = $admin->fcm_token ?? null;

                if (!empty($adminToken)) {
                    FirebaseService::sendNotification(
                        $adminToken,
                        'Payment Received 💰',
                        'Driver sent ₹' . $request->amount,
                        [
                            'booking_id' => (string) $request->booking_id,
                            'type'       => 'payment_submitted'
                        ]
                    );
                }
            }
        } catch (\Exception $e) {
            // Log the error so we can debug, but don't crash the app
            Log::error("Notification Error: " . $e->getMessage());
        }

        return response()->json([
            'status' => true,
            'message' => 'Payment submitted for admin verification'
        ]);
    }

    // ------------------------------------------------------------------
    // 🔹 ADMIN VERIFIES PAYMENT (Uses Notification Class + FirebaseService)
    // ------------------------------------------------------------------
    public function verify(Request $request)
    {
        $request->validate([
            'commission_id' => 'required|exists:commissions,id'
        ]);

        $commission = Commission::with('booking.driver')->find($request->commission_id);
        $driver = $commission->booking->driver;

        // 1. Update Status
        $commission->update([
            'status' => 'Paid',
            'paid_date' => $commission->paid_date ?? now()
        ]);

        if ($driver) {
            // 🔹 A) SAVE DATABASE NOTIFICATION
            // You need to create: php artisan make:notification PaymentVerifiedNotification
            $driver->notify(new PaymentVerifiedNotification($commission));

            // 🔹 B) SEND PHONE PUSH NOTIFICATION (FCM)
            if (!empty($driver->fcm_token)) {
                FirebaseService::sendNotification(
                    $driver->fcm_token,
                    'Payment Verified ✅',
                    'Your commission payment for Booking #' . $commission->booking_id . ' is approved.',
                    [
                        'booking_id' => (string) $commission->booking_id,
                        'type'       => 'payment_verified'
                    ]
                );
            }
        }

        return response()->json([
            'status' => true,
            'message' => 'Commission verified successfully'
        ]);
    }

    public function getPaymentDetails()
    {
        // Fetch directly from .env file
        $upiId = env('ADMIN_UPI_ID', 's.poovarasanpoov-2@okicici'); // 2nd param is default fallback
        $name  = env('ADMIN_MERCHANT_NAME', 'FastPik Admin');

        return response()->json([
            'status' => true,
            'data' => [
                'upi_id' => $upiId,
                'merchant_name' => $name
            ]
        ]);
    }

    // ------------------------------------------------------------------
    // 🔴 ADMIN REJECTS PAYMENT (Mark as Unpaid)
    // ------------------------------------------------------------------
    public function reject(Request $request)
    {
        $request->validate([
            'commission_id' => 'required|exists:commissions,id'
        ]);

        $commission = Commission::with('booking.driver')->find($request->commission_id);
        $driver = $commission->booking->driver;

        // 1. Update Status to 'Unpaid' (or 'unpaid' depending on your ENUM)
        $commission->update([
            'status' => 'Unpaid', // Make sure 'Unpaid' is allowed in your DB column!
            'paid_date' => null   // Clear the paid date
        ]);

        // 2. Notify Driver
        if ($driver) {
            // A) SAVE DB NOTIFICATION
            DB::table('notifications')->insert([
                'id'              => Str::uuid()->toString(),
                'type'            => 'App\Notifications\PaymentRejectedNotification',
                'notifiable_type' => 'App\Models\Driver', // Or 'User'
                'notifiable_id'   => $driver->id,
                'data'            => json_encode([
                    'title'      => 'Payment Rejected ❌',
                    'message'    => 'Admin marked your payment for Booking #' . $commission->booking_id . ' as not received.',
                    'booking_id' => $commission->booking_id,
                    'type'       => 'payment_rejected'
                ]),
                'read_at'         => null,
                'created_at'      => now(),
                'updated_at'      => now(),
            ]);

            // B) SEND FCM PUSH
            if (!empty($driver->fcm_token)) {
                FirebaseService::sendNotification(
                    $driver->fcm_token,
                    'Payment Rejected ❌',
                    'Admin did not receive payment for Booking #' . $commission->booking_id,
                    [
                        'booking_id' => (string) $commission->booking_id,
                        'type'       => 'payment_rejected'
                    ]
                );
            }
        }

        return response()->json([
            'status' => true,
            'message' => 'Payment marked as Unpaid'
        ]);
    }
}
