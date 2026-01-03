<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Driver;
use App\Models\AppAdmin;

class AppLoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'role' => 'required|in:admin,driver',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // APP ADMIN
        if ($request->role === 'admin') {
            $admin = AppAdmin::where('email', $request->email)
                ->where('status', 1)
                ->first();

            if (!$admin || !Hash::check($request->password, $admin->password)) {
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid admin credentials'
                ], 401);
            }

            return response()->json([
                'status' => true,
                'role' => 'admin',
                'token' => $admin->createToken('app-admin')->plainTextToken,
                'data' => $admin
            ]);
        }

        // DRIVER
        $driver = Driver::where('email', $request->email)
            ->where('status', 1)
            ->first();

        if (!$driver || !Hash::check($request->password, $driver->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid driver credentials'
            ], 401);
        }

        return response()->json([
            'status' => true,
            'role' => 'driver',
            'token' => $driver->createToken('driver')->plainTextToken,
            'data' => $driver
        ]);
    }
}
