<?php

namespace App\Http\Controllers;
use App\Models\Commission;
use App\Models\Booking;


use Illuminate\Http\Request;

class CommissionController extends Controller
{
    //


    public function index()
{
    $commissions = Commission::with(['booking.driver', 'booking.user'])
        ->whereHas('booking', function ($q) {
            $q->where('trip_status', 'completed');
        })
        ->get();

    return response()->json($commissions);
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
// Eager load the booking, driver, and user
   // Load the related booking and its driver
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
}
