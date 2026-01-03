<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Driver;

class AdminDriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::select(
            'id',
            'name',
            'phone',
            'email',
            'carType',
            'carNumber',
            'status'
        )->get();

        return response()->json([
            'status' => true,
            'data' => $drivers
        ]);
    }
}
