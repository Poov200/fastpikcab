<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Commission;
use App\Models\Driver;
use Carbon\Carbon;

class AdminDashboardController extends Controller
{
    /**
     * 📊 DASHBOARD STATS
     */
    public function stats()
    {
        $today = Carbon::today();

        return response()->json([
            'status' => true,
            'data' => [
                'today_bookings' => Booking::whereDate('created_at', $today)->count(),

                'unassigned_bookings' => Booking::whereNull('driver_id')
                    ->where('status', 'pending')
                    ->count(),

                'assigned_bookings' => Booking::whereNotNull('driver_id')
                    ->where('status', 'assigned')
                    ->count(),

                'total_drivers' => Driver::count(),

                'pending_commission' => Commission::where('status', 'unpaid')
                    ->sum('amount'),
            ]
        ]);
    }

    /**
     * 🆕 RECENT BOOKINGS (LIMIT 5)
     */
    public function recentBookings()
    {
        return response()->json([
            'status' => true,
            'data' => Booking::latest()
                ->take(5)
                ->get([
                    'id',
                    'booking_id',
                    'pickup',
                    'destination',
                    'assigned_amount',
                    'status',
                    'created_at'
                ])
        ]);
    }

    public function pendingCommission()
    {
        return response()->json([
            'status' => true,
            'data' => Commission::with([
                'booking.driver'
            ])
                
                ->orderBy('id', 'desc')
                ->get()
        ]);
    }
}
