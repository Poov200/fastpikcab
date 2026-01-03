
<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commission;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
// Import your Notification class if you have one
// use App\Notifications\AdminPaymentNotification;

class DriverApiController extends Controller
{
    public function notifyPayment(Request $request) {
        $request->validate([
            'booking_id' => 'required'
        ]);

        $bookingId = $request->booking_id;

        // 1. Update DB so driver sees "Waiting for Admin"
        $updated = Commission::where('booking_id', $bookingId)->update([
            'status' => 'pending_verification'
        ]);

        if ($updated) {
            // 2. Logic to notify Admin
            // You can fetch the admin user and send a notification
            $admin = User::where('role', 'admin')->first();

            // Example using Laravel's internal Notification system
            // $admin->notify(new AdminPaymentNotification($bookingId));

            return response()->json([
                'status' => true,
                'message' => 'Admin notified for verification'
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Booking not found'
        ], 404);
    }
}
