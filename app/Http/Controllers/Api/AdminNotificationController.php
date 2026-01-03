<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminNotificationController extends Controller
{
    // 🔔 LIST + COUNT
    public function index(Request $request)
    {
        $admin = $request->user(); // ✅ Sanctum admin

        return response()->json([
            'status' => true,
            'data' => $admin->notifications()->latest()->get(),
            'unread_count' => $admin->unreadNotifications()->count(),
        ]);
    }

    // ✅ MARK AS READ
    public function markRead(Request $request, $id)
    {
        $notification = $request->user()
            ->notifications()
            ->where('id', $id)
            ->first();

        if ($notification) {
            $notification->markAsRead();
        }

        return response()->json(['status' => true]);
    }

    // 🗑 DELETE (Swipe)
    public function delete(Request $request, $id)
    {
        $request->user()
            ->notifications()
            ->where('id', $id)
            ->delete();

        return response()->json(['status' => true]);
    }

    // 🧹 AUTO DELETE (30 DAYS)
    public function autoCleanup()
    {
        DB::table('notifications')
            ->where('created_at', '<', Carbon::now()->subDays(30))
            ->delete();

        return response()->json(['status' => true]);
    }
}
