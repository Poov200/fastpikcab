<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Driver;
use Illuminate\Http\Request;
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
            'no_of_days' => 'required|integer', // new field

            'distance' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',



        ]);
        // Convert time to proper format (HH:mm:ss)
        $timeString = $request->input('time'); // e.g., "Thu Jan 01 1970 15:07:00"
        $data['time'] = date('H:i:s', strtotime($timeString));

        // Generate booking ID
        $today = date('Y-m-d');
        $countToday = Booking::whereDate('created_at', $today)->count() + 1;
        $serial = str_pad($countToday, 3, '0', STR_PAD_LEFT); // e.g., 001, 002, ...
        $bookingId = 'FASTPIK-' . date('Ymd') . '-' . $serial;

        $data['booking_id'] = $bookingId;

        // Create the booking
        $booking = Booking::create($data);

        // Send mail to customer if email exists
        if (!empty($booking->email)) {
            Mail::to($booking->email)->send(new CustomerBookingMail($booking));
        }

        $adminEmail = env('MAIL_FROM_ADDRESS');

        if ($adminEmail) {
            Mail::to($adminEmail)->send(new AdminBookingMail($booking));
        }


        return $booking;
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
        'amount' => 'nullable|numeric|min:0', //  now optional
    ]);

    $booking = Booking::findOrFail($bookingId);

    // Check if driver is active
    $driver = Driver::where('id', $data['driver_id'])->where('status', 'active')->first();
    if (!$driver) {
        return response()->json(['message' => 'Driver not active or not found'], 400);
    }

    // Check if this is a reassignment
    $isReassigned = $booking->driver_id !== null && $booking->driver_id !== $data['driver_id'];

    $booking->driver_id = $driver->id;

    //  Only update amount if it's provided
    if (isset($data['amount'])) {
        $booking->assigned_amount = $data['amount'];
    }

    $booking->status = 'assigned';
    $booking->save();



    // Send email based on whether it's a reassignment or first assignment
    if ($isReassigned) {
        Mail::to($booking->email)->send(new ReassignedDriverToCustomerMail($booking, $driver));
        Mail::to($driver->email)->send(new ReassignedBookingToDriverMail($booking));
    } else {
        Mail::to($booking->email)->send(new AssignedDriverToCustomerMail($booking, $driver));
        Mail::to($driver->email)->send(new NewBookingAssignedToDriverMail($booking));
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
        $booking->trip_status = $request->trip_status;
        $booking->save();

        // Only send emails for these statuses
        if (in_array($request->trip_status, ['cancelled', 'delay', 'completed'])) {
            $adminEmail = env('MAIL_FROM_ADDRESS'); // or use a specific admin email if preferred

            // Send email to customer
            Mail::to($booking->email)->send(new TripStatusUpdateMail($booking, 'customer'));

            // Send email to admin
            Mail::to($adminEmail)->send(new TripStatusUpdateMail($booking, 'admin'));
        }

        return response()->json([
            'message' => 'Trip status updated successfully.',
            'booking' => $booking,
        ]);
    }
}
