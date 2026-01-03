<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Driver;
use App\Notifications\BookingAssignedNotification;
use App\Services\FirebaseService;

class AdminBookingController extends Controller
{
    public function assign(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'driver_id'  => 'required|exists:drivers,id',
        ]);

        // 🔹 Get booking & driver
        $booking = Booking::findOrFail($request->booking_id);
        $driver  = Driver::findOrFail($request->driver_id);

        // 🔹 Assign booking
        $booking->update([
            'driver_id' => $driver->id,
            'status'    => 'assigned',
        ]);

        // 🔹 1) SAVE DATABASE NOTIFICATION (APP NOTIFICATION PAGE)
        $driver->notify(new BookingAssignedNotification($booking));

        // 🔹 2) SEND PHONE PUSH NOTIFICATION (FCM HTTP v1)
        FirebaseService::sendNotification(
            $driver->fcm_token,
            'New Ride Assigned 🚕',
            'Booking '.$booking->booking_id.' assigned to you',
            [
                'booking_id' => (string) $booking->id,
                'type'       => 'booking_assigned',
            ]
        );

        return response()->json([
            'status'  => true,
            'message' => 'Driver assigned & notification sent',
        ]);
    }

     public function delete($id)
    {
        $booking = Booking::find($id);

        if (!$booking) {
            return response()->json([
                'status' => false,
                'message' => 'Booking not found'
            ], 404);
        }

        $booking->delete();

        return response()->json([
            'status' => true,
            'message' => 'Booking deleted successfully'
        ]);
    }
}
