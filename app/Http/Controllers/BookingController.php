<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Driver;
use App\Models\AppAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

/* MAILS */
use App\Mail\CustomerBookingMail;
use App\Mail\AdminBookingMail;
use App\Mail\NewBookingAssignedToDriverMail;
use App\Mail\ReassignedBookingToDriverMail;
use App\Mail\ReassignedDriverToCustomerMail;
use App\Mail\AssignedDriverToCustomerMail;
use App\Mail\TripStatusUpdateMail;

use App\Notifications\AdminBookingNotification;



/* NOTIFICATIONS */
use App\Notifications\AdminNewBookingNotification;

/* SERVICES */
use App\Services\FirebaseService;

class BookingController extends Controller
{
    // ----------------------------------
    // SHOW ALL BOOKINGS
    // ----------------------------------
    public function index()
    {
        return Booking::all();
    }

    // ----------------------------------
    // CREATE BOOKING (WEBSITE + APP)
    // ----------------------------------
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'            => 'required|string',
            'email'           => 'nullable|email',
            'contact'         => 'required|string',
            'pickup'          => 'required|string',
            'destination'     => 'required|string',
            'tripType'        => 'required|string',
            'vehicle'         => 'required|string',
            'passengers'      => 'required|string',
            'no_of_days'      => 'required|integer',
            'assigned_amount' => 'nullable|numeric|min:0',
            'distance'        => 'required|string',
            'date'            => 'required|date',
            'time'            => 'required',
        ]);

        // Format time
        $data['time'] = date('H:i:s', strtotime($request->time));

        // Generate booking ID
        $today = date('Y-m-d');
        $countToday = Booking::whereDate('created_at', $today)->count() + 1;
        $serial = str_pad($countToday, 3, '0', STR_PAD_LEFT);
        $data['booking_id'] = 'FASTPIK-' . date('Ymd') . '-' . $serial;

        // Create booking
        $booking = Booking::create($data);

        // ----------------------------------
        // 📧 CUSTOMER MAIL
        // ----------------------------------
        try {
            if (!empty($booking->email)) {
                Mail::to($booking->email)->send(new CustomerBookingMail($booking));
            }
        } catch (\Exception $e) {
            Log::error('Customer mail failed', ['error' => $e->getMessage()]);
        }

        // ----------------------------------
        // 📧 ADMIN MAIL
        // ----------------------------------
        try {
            $adminEmail = env('MAIL_FROM_ADDRESS');
            if ($adminEmail) {
                Mail::to($adminEmail)->send(new AdminBookingMail($booking));
            }
        } catch (\Exception $e) {
            Log::error('Admin mail failed', ['error' => $e->getMessage()]);
        }

        // ----------------------------------
        // 🔔 ADMIN DB + PUSH NOTIFICATION
        // ----------------------------------
        // 🔔 Notify Admin (DB + PUSH)
        try {
            $admins = AppAdmin::where('status', 1)->get();

            foreach ($admins as $admin) {

                // 1️⃣ DATABASE NOTIFICATION
                $admin->notify(new AdminNewBookingNotification($booking));

                // 2️⃣ PUSH NOTIFICATION
                if ($admin->fcm_token) {
                    FirebaseService::sendToAdmin(
                        $admin->fcm_token,
                        'New Booking 🚕',
                        'Pickup: ' . $booking->pickup,
                        $booking->id
                    );
                }
            }
        } catch (\Exception $e) {
            Log::error('Admin notification failed', [
                'error' => $e->getMessage()
            ]);
        }


        return response()->json([
            'success' => true,
            'message' => 'Booking created successfully',
            'data'    => $booking
        ], 201);
    }

    // ----------------------------------
    // ASSIGN / REASSIGN DRIVER
    // ----------------------------------
    public function assignDriver(Request $request, $bookingId)
    {
        $data = $request->validate([
            'driver_id' => 'required|exists:drivers,id',
            'amount'    => 'nullable|numeric|min:0',
        ]);

        $booking = Booking::findOrFail($bookingId);

        $driver = Driver::where('id', $data['driver_id'])
            ->where('status', 'active')
            ->first();

        if (!$driver) {
            return response()->json(['message' => 'Driver not active'], 400);
        }

        $isReassigned = $booking->driver_id && $booking->driver_id != $driver->id;

        $booking->driver_id = $driver->id;
        $booking->status = 'assigned';

        if (isset($data['amount'])) {
            $booking->assigned_amount = $data['amount'];
        }

        $booking->save();

        // MAILS
        try {
            if ($isReassigned) {
                Mail::to($booking->email)->send(new ReassignedDriverToCustomerMail($booking, $driver));
                Mail::to($driver->email)->send(new ReassignedBookingToDriverMail($booking));
            } else {
                Mail::to($booking->email)->send(new AssignedDriverToCustomerMail($booking, $driver));
                Mail::to($driver->email)->send(new NewBookingAssignedToDriverMail($booking));
            }
        } catch (\Exception $e) {
            Log::error('Driver assignment mail failed', ['error' => $e->getMessage()]);
        }

        return response()->json([
            'message' => $isReassigned ? 'Driver reassigned successfully' : 'Driver assigned successfully',
            'booking' => $booking
        ]);
    }

    // ----------------------------------
    // UPDATE TRIP STATUS
    // ----------------------------------
    public function updateTripStatus(Request $request, $id)
    {
        $request->validate([
            'trip_status' => 'required|in:cancelled,delay,completed,pending',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->trip_status = $request->trip_status;
        $booking->save();

        try {
            Mail::to($booking->email)->send(new TripStatusUpdateMail($booking, 'customer'));

            $adminEmail = env('MAIL_FROM_ADDRESS');
            if ($adminEmail) {
                Mail::to($adminEmail)->send(new TripStatusUpdateMail($booking, 'admin'));
            }
        } catch (\Exception $e) {
            Log::error('Trip status mail failed', ['error' => $e->getMessage()]);
        }

        return response()->json([
            'message' => 'Trip status updated successfully',
            'booking' => $booking
        ]);
    }

    // ----------------------------------
    // DELETE BOOKING
    // ----------------------------------
    public function destroy($id)
    {
        Booking::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
