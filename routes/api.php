<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminDashboardController;

/*
|--------------------------------------------------------------------------
| API Controllers
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Api\AppLoginController;
use App\Http\Controllers\Api\DriverRegisterController;
use App\Http\Controllers\Api\DriverProfileController;
use App\Http\Controllers\Api\AppAdminProfileController;
use App\Http\Controllers\Api\AdminDriverController;
use App\Http\Controllers\Api\AdminRideController;
use App\Http\Controllers\Api\AdminBookingController;
use App\Http\Controllers\Api\DriverRideController;
use App\Http\Controllers\Api\AdminNotificationController;
use App\Http\Controllers\Api\DriverDashboardController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get(
        'app/driver/dashboard/stats',
        [DriverDashboardController::class, 'stats']
    );
});


use App\Models\Driver;
use App\Models\AppAdmin;
use Laravel\Sanctum\PersonalAccessToken;
use App\Models\Booking;


/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

// App login (Admin / Driver)
Route::post('/app/login', [AppLoginController::class, 'login']);

// Driver registration
Route::post('/app/driver/register', [DriverRegisterController::class, 'register']);

/*
|--------------------------------------------------------------------------
| AUTHENTICATED ROUTES (SANCTUM)
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */
    Route::post('/app/logout', function (Request $request) {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status' => true,
            'message' => 'Logged out successfully'
        ]);
    });

    /*
    |--------------------------------------------------------------------------
    | DRIVER APIs
    |--------------------------------------------------------------------------
    */

    // Driver profile
    Route::get('/app/driver/profile', [DriverProfileController::class, 'profile']);

    // Driver future rides
    Route::get('/app/driver/rides/future', [DriverRideController::class, 'future']);

    // Driver completed rides
    Route::get('/app/driver/rides/completed', [DriverRideController::class, 'completed']);

    // Driver notifications
    Route::get('/app/driver/notifications', function (Request $request) {

        $user = $request->user();

        if (!$user instanceof Driver) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized'
            ], 403);
        }

        return response()->json([
            'status' => true,
            'data' => $user->notifications
        ]);
    });

    // Save DRIVER FCM token ✅ (FINAL FIX)
    Route::post('/app/driver/save-fcm', function (Request $request) {

        $user = $request->user();

        if (!$user instanceof Driver) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized (not driver)'
            ], 403);
        }

        $request->validate([
            'fcm_token' => 'required|string'
        ]);

        $user->update([
            'fcm_token' => $request->fcm_token
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Driver FCM token saved'
        ]);
    });

    /*
    |--------------------------------------------------------------------------
    | APP ADMIN APIs (MOBILE ADMIN)
    |--------------------------------------------------------------------------
    */

    // App admin profile
    Route::get('/app/admin/profile', [AppAdminProfileController::class, 'profile']);



Route::post('/app/appadmin/save-fcm', function (Request $request) {

    $accessToken = PersonalAccessToken::findToken(
        $request->bearerToken()
    );

    if (!$accessToken) {
        return response()->json([
            'status' => false,
            'message' => 'Invalid token'
        ], 401);
    }

    $admin = AppAdmin::find($accessToken->tokenable_id);

    if (!$admin) {
        return response()->json([
            'status' => false,
            'message' => 'App Admin not found'
        ], 404);
    }

    $request->validate([
        'fcm_token' => 'required|string'
    ]);

    $admin->update([
        'fcm_token' => $request->fcm_token
    ]);

    return response()->json([
        'status' => true,
        'message' => 'App Admin FCM token saved'
    ]);
});

    /*
    |--------------------------------------------------------------------------
    | ADMIN MANAGEMENT (RIDES / DRIVERS)
    |--------------------------------------------------------------------------
    */

    Route::prefix('app/admin')->group(function () {

        // Driver list
        Route::get('/drivers', [AdminDriverController::class, 'index']);

        // Rides
        Route::get('/rides', [AdminRideController::class, 'all']);
        Route::get('/rides/unassigned', [AdminRideController::class, 'unassigned']);
        Route::get('/rides/assigned', [AdminRideController::class, 'assigned']);
        Route::get('/rides/completed', [AdminRideController::class, 'completed']);
    });

    // Assign booking to driver
    Route::post(
        '/app/admin/booking/assign',
        [AdminBookingController::class, 'assign']
    );

});



Route::middleware('auth:sanctum')->post('/app/driver/clear-fcm', function (Request $request) {

    $accessToken = PersonalAccessToken::findToken($request->bearerToken());

    if (!$accessToken) {
        return response()->json([
            'status' => false,
            'message' => 'Invalid token'
        ], 401);
    }

    $driver = Driver::find($accessToken->tokenable_id);

    if (!$driver) {
        return response()->json([
            'status' => false,
            'message' => 'Driver not found'
        ], 404);
    }

    $driver->update(['fcm_token' => null]);

    return response()->json([
        'status' => true,
        'message' => 'Driver FCM token cleared'
    ]);
});



Route::middleware('auth:sanctum')->post('/app/appadmin/clear-fcm', function (Request $request) {

    $accessToken = PersonalAccessToken::findToken($request->bearerToken());

    if (!$accessToken) {
        return response()->json([
            'status' => false,
            'message' => 'Invalid token'
        ], 401);
    }

    $admin = AppAdmin::find($accessToken->tokenable_id);

    if (!$admin) {
        return response()->json([
            'status' => false,
            'message' => 'App Admin not found'
        ], 404);
    }

    $admin->update(['fcm_token' => null]);

    return response()->json([
        'status' => true,
        'message' => 'App Admin FCM token cleared'
    ]);
});



Route::middleware('auth:sanctum')->post(
    '/app/driver/notifications/read',
    function (Request $request) {
        $request->validate([
            'notification_id' => 'required'
        ]);

        $notification = $request->user()
            ->notifications()
            ->where('id', $request->notification_id)
            ->first();

        if ($notification) {
            $notification->markAsRead();
        }

        return response()->json([
            'status' => true
        ]);
    }
);



Route::middleware('auth:sanctum')->get(
    '/app/driver/booking/{id}',
    function ($id) {
        $booking = Booking::with('driver')
            ->findOrFail($id);

        return response()->json([
            'status' => true,
            'data' => $booking
        ]);
    }
);

Route::middleware('auth:sanctum')->get(
    '/app/driver/notifications/unread-count',
    fn(Request $request) => response()->json([
        'status' => true,
        'count' => $request->user()
            ->notifications()
            ->whereNull('read_at')
            ->count()
    ])
);

Route::middleware('auth:sanctum')->delete(
    '/app/driver/notifications/{id}',
    function (Request $request, $id) {
        $request->user()
            ->notifications()
            ->where('id', $id)
            ->delete();

        return response()->json(['status' => true]);
    }
);

Route::post('app/admin/bookings/update-status', [AdminRideController::class, 'updateStatus']);
Route::post('app/admin/bookings/update-commission-notify', [AdminRideController::class, 'updateCommissionAndNotify']);
Route::post('app/admin/bookings/update-commission-status', [AdminRideController::class, 'updateCommissionStatus']);
Route::post('app/admin/bookings/notify-commission', [AdminRideController::class, 'notifyCommission']);




// Dashboard
Route::middleware('auth:sanctum')->group(function () {

    Route::get(
        'app/admin/dashboard/stats',
        [AdminDashboardController::class, 'stats']
    );

    Route::get(
        'app/admin/dashboard/recent-bookings',
        [AdminDashboardController::class, 'recentBookings']
    );

});

Route::get(
    'app/admin/commission/pending',
    [AdminDashboardController::class, 'pendingCommission']
);





Route::middleware('auth:sanctum')->group(function () {

    Route::get(
        'app/admin/notifications',
        [AdminNotificationController::class, 'index']
    );

    Route::post(
        'app/admin/notifications/read/{id}',
        [AdminNotificationController::class, 'markRead']
    );

    Route::delete(
        'app/admin/notifications/{id}',
        [AdminNotificationController::class, 'delete']
    );

    Route::get(
        'app/admin/notifications/unread-count',
        fn (Request $request) => response()->json([
            'status' => true,
            'count' => $request->user()->unreadNotifications()->count()
        ])
    );
});


Route::middleware('auth:sanctum')->get(
    'app/admin/booking/{id}',
    function ($id) {
        $booking = Booking::with(['driver', 'commission'])
            ->findOrFail($id);

        return response()->json([
            'status' => true,
            'data' => $booking
        ]);
    }
);

Route::middleware('auth:sanctum')->delete(
    'app/admin/booking/{id}',
    [AdminBookingController::class, 'delete']
);

use App\Http\Controllers\Api\DriverCommissionController;



Route::middleware('auth:sanctum')->group(function () {
    Route::get(
        'app/driver/commission',
        [DriverCommissionController::class, 'all']
    );
});

use App\Http\Controllers\CommissionController;

// DRIVER
Route::middleware('auth:sanctum')->group(function () {

    Route::post('/app/driver/notify-payment', [CommissionController::class, 'notifyPayment']);
});

// ADMIN
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/app/admin/commission/verify', [CommissionController::class, 'verify']);

});


Route::get('/app/admin/payment-details', [App\Http\Controllers\CommissionController::class, 'getPaymentDetails']);
Route::post('/app/admin/commission/reject', [CommissionController::class, 'reject']);
