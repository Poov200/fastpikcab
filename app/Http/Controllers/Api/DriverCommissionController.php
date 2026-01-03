<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriverCommissionController extends Controller
{
   public function all(Request $request)
{
    $driver = $request->user(); // authenticated driver

    $data = DB::table('commissions')
        ->join('bookings', 'commissions.booking_id', '=', 'bookings.id')
        ->where('bookings.driver_id', $driver->id)
        ->select(
            'bookings.booking_id',
            'commissions.amount as commission',
            'commissions.status',
            'commissions.paid_date'
        )
        ->orderBy('commissions.created_at', 'desc')
        ->get();

    return response()->json([
        'status' => true,
        'data' => $data
    ]);
}

}
