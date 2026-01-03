<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class DriverRideController extends Controller
{
    // 🔹 Future rides (assigned but not completed)
    public function future(Request $request)
    {
        $driver = $request->user();

        $rides = Booking::where('driver_id', $driver->id)
            ->where('status', 'assigned')
            ->orderBy('id', 'desc')
            ->get();

        return response()->json([
            'status' => true,
            'data' => $rides
        ]);
    }

    // 🔹 Completed rides
    public function completed(Request $request)
    {
        $driver = $request->user();

        $rides = Booking::where('driver_id', $driver->id)
            ->where('status', 'completed')
            ->orderBy('id', 'desc')
            ->get();

        return response()->json([
            'status' => true,
            'data' => $rides
        ]);
    }
}
