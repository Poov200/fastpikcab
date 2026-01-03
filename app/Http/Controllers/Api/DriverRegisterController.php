<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\AppAdmin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Notifications\AdminNewDriverNotification;
use App\Services\FirebaseService;

class DriverRegisterController extends Controller
{
    public function register(Request $request)
    {
        // ✅ Validate request
        $request->validate([
            'name'       => 'required|string|max:255',
            'phone'      => 'required|string|max:15|unique:drivers,phone',
            'email'      => 'required|email|unique:drivers,email',
            'carType'    => 'required|string|max:50',
            'carNumber'  => 'required|string|max:50',
            'password'   => 'required|min:6',
        ]);

        // ✅ Create driver
        $driver = Driver::create([
            'name'      => $request->name,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'carType'   => $request->carType,
            'carNumber' => $request->carNumber,
            'password'  => Hash::make($request->password),
            'status'    => 1,
        ]);

        // 🔔 SEND ADMIN NOTIFICATION
        try {
            $admins = AppAdmin::where('status', 1)->get();

            foreach ($admins as $admin) {
                // Database notification
                $admin->notify(new AdminNewDriverNotification($driver));

                // 🔥 Optional FCM push
                if (!empty($admin->fcm_token)) {
                    FirebaseService::sendNotification(
                        $admin->fcm_token,
                        'New Driver Joined 🚗',
                        "{$driver->name} has registered as a driver",
                        [
                            'type' => 'new_driver',
                            'driver_id' => (string) $driver->id,
                        ]
                    );
                }
            }
        } catch (\Exception $e) {
            Log::error('Admin driver notification failed', [
                'error' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status'  => true,
            'message' => 'Driver registered successfully',
            'data'    => $driver
        ], 201);
    }
}
