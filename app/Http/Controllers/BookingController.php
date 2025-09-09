<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Mail\CustomerBookingMail;
use App\Mail\AdminBookingMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewBookingAssignedToDriverMail;
use App\Mail\ReassignedBookingToDriverMail;
use App\Mail\ReassignedDriverToCustomerMail;
use App\Mail\AssignedDriverToCustomerMail;
use App\Mail\TripStatusUpdateMail;
use Carbon\Carbon;

class BookingController extends Controller
{
    // Show all bookings
    public function index()
    {
        return Booking::all();
    }

    // Store a booking
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'nullable|email',
            'contact' => 'required|string',
            'pickup' => 'required|string',
            'destination' => 'required|string',
            'tripType' => 'required|string',
            'vehicle' => 'required|string',
            'passengers' => 'required|string',
            'no_of_days' => 'required|integer',
            'assigned_amount' => 'nullable|numeric|min:0',
            'distance' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        // Convert time to HH:mm:ss
        $timeString = $request->input('time');
        $data['time'] = date('H:i:s', strtotime($timeString));

        // Generate booking ID
        $today = date('Y-m-d');
        $countToday = Booking::whereDate('created_at', $today)->count() + 1;
        $serial = str_pad($countToday, 3, '0', STR_PAD_LEFT);
        $bookingId = 'FASTPIK-' . date('Ymd') . '-' . $serial;

        $data['booking_id'] = $bookingId;

        // Save booking first (so order is always created)
        $booking = Booking::create($data);

        // Send customer email (non-blocking)
        try {
            if (!empty($booking->email)) {
                Mail::to($booking->email)->send(new CustomerBookingMail($booking));
            }
        } catch (\Exception $e) {
            Log::error("Customer mail sending failed: " . $e->getMessage());
        }

        // Send admin email (non-blocking)
        try {
            $adminEmail = env('MAIL_FROM_ADDRESS');
            if ($adminEmail) {
                Mail::to($adminEmail)->send(new AdminBookingMail($booking));
            }
        } catch (\Exception $e) {
            Log::error("Admin mail sending failed: " . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Booking created successfully',
            'data' => $booking
        ], 201);
    }


    // Update booking
    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update($request->all());
        return $booking;
    }

    // Delete booking
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return response()->json(['message' => 'Deleted']);
    }

    public function assignDriver(Request $request, $bookingId)
    {
        // Validate input
        $data = $request->validate([
            'driver_id' => 'required|exists:drivers,id',
            'amount' => 'nullable|numeric|min:0',
        ]);

        $booking = Booking::findOrFail($bookingId);

        // Check if driver is active
        $driver = Driver::where('id', $data['driver_id'])
            ->where('status', 'active')
            ->first();

        if (!$driver) {
            return response()->json(['message' => 'Driver not active or not found'], 400);
        }

        // Check if this is a reassignment
        $isReassigned = $booking->driver_id !== null && $booking->driver_id !== $data['driver_id'];

        // Always update booking first
        $booking->driver_id = $driver->id;
        if (isset($data['amount'])) {
            $booking->assigned_amount = $data['amount'];
        }
        $booking->status = 'assigned';
        $booking->save();

        // Now try sending emails (but booking is already saved ✅)
        if ($isReassigned) {
            try {
                Mail::to($booking->email)->send(new ReassignedDriverToCustomerMail($booking, $driver));
            } catch (\Exception $e) {
                Log::error('Failed to send reassigned driver mail to customer', ['error' => $e->getMessage()]);
            }

            try {
                Mail::to($driver->email)->send(new ReassignedBookingToDriverMail($booking));
            } catch (\Exception $e) {
                Log::error('Failed to send reassigned booking mail to driver', ['error' => $e->getMessage()]);
            }
        } else {
            try {
                Mail::to($booking->email)->send(new AssignedDriverToCustomerMail($booking, $driver));
            } catch (\Exception $e) {
                Log::error('Failed to send new driver assignment mail to customer', ['error' => $e->getMessage()]);
            }

            try {
                Mail::to($driver->email)->send(new NewBookingAssignedToDriverMail($booking));
            } catch (\Exception $e) {
                Log::error('Failed to send new booking assignment mail to driver', ['error' => $e->getMessage()]);
            }
        }

        return response()->json([
            'message' => $isReassigned ? 'Driver reassigned successfully' : 'Driver assigned successfully',
            'booking' => $booking,
        ]);
    }


    public function getAssignedBookings()
    {
        $bookings = Booking::with('driver')
            ->where('status', 'assigned')
            ->get();

        return response()->json($bookings);
    }

    public function updateTripStatus(Request $request, $id)
    {
        $request->validate([
            'trip_status' => 'required|in:cancelled,delay,completed,pending',
        ]);

        $booking = Booking::findOrFail($id);

        // Always update trip status first ✅
        $booking->trip_status = $request->trip_status;
        $booking->save();

        // Send mail only for specific statuses (non-blocking)
        if (in_array($booking->trip_status, ['cancelled', 'delay', 'completed'])) {
            $adminEmail = env('MAIL_FROM_ADDRESS');

            // Send email to customer
            try {
                Mail::to($booking->email)->send(new TripStatusUpdateMail($booking, 'customer'));
            } catch (\Exception $e) {
                Log::error('Failed to send trip status update mail to customer', [
                    'booking_id' => $booking->booking_id,
                    'error' => $e->getMessage(),
                ]);
            }

            // Send email to admin
            try {
                if ($adminEmail) {
                    Mail::to($adminEmail)->send(new TripStatusUpdateMail($booking, 'admin'));
                }
            } catch (\Exception $e) {
                Log::error('Failed to send trip status update mail to admin', [
                    'booking_id' => $booking->booking_id,
                    'error' => $e->getMessage(),
                ]);
            }
        }

        return response()->json([
            'message' => 'Trip status updated successfully.',
            'booking' => $booking,
        ]);
    }
}
