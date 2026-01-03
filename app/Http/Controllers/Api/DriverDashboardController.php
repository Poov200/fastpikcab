<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;

class DriverDashboardController extends Controller
{
    public function stats(Request $request)
    {
        $driver = $request->user(); // sanctum driver

        $today = Carbon::today();

        return response()->json([
            'status' => true,
            'data' => [
                'today_rides' => Booking::where('driver_id', $driver->id)
                    ->whereDate('date', $today)
                    ->count(),

                'upcoming_rides' => Booking::where('driver_id', $driver->id)
                    ->whereIn('status', ['assigned', 'pending'])
                    ->count(),

                'completed_rides' => Booking::where('driver_id', $driver->id)
                    ->where('status', 'completed')
                    ->count(),

                'total_earnings' => Booking::where('driver_id', $driver->id)
                    ->where('status', 'completed')
                    ->sum('assigned_amount'),

                'status' => $driver->status == 1 ? 'Active' : 'Inactive',
            ]
        ]);
    }
}
