<?php

namespace App\Services;

use Google\Auth\Credentials\ServiceAccountCredentials;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FirebaseService
{
    protected static function getAccessToken()
    {
        $credentials = new ServiceAccountCredentials(
            'https://www.googleapis.com/auth/firebase.messaging',
            json_decode(
                file_get_contents(storage_path('app/firebase/firebase.json')),
                true
            )
        );

        $token = $credentials->fetchAuthToken();
        return $token['access_token'];
    }

    /**
     * 🔔 LOW-LEVEL SEND (Already existed)
     */
    public static function sendNotification(
        string $fcmToken,
        string $title,
        string $body,
        array $data = []
    ): void {
        if (!$fcmToken) return;

        $json = json_decode(
            file_get_contents(storage_path('app/firebase/firebase.json')),
            true
        );

        $projectId  = $json['project_id'];
        $accessToken = self::getAccessToken();

        $payload = [
            'message' => [
                'token' => $fcmToken,
                'notification' => [
                    'title' => $title,
                    'body'  => $body,
                ],
                'data' => $data,
            ],
        ];

        try {
            Http::withToken($accessToken)->post(
                "https://fcm.googleapis.com/v1/projects/{$projectId}/messages:send",
                $payload
            );
        } catch (\Exception $e) {
            Log::error('FCM send error', [
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * ✅ HIGH-LEVEL ADMIN NOTIFICATION (NEW)
     */
    public static function sendToAdmin(
        string $fcmToken,
        string $title,
        string $message,
        int|string $bookingId,
        string $type = 'new_booking'
    ): void {
        self::sendNotification(
            $fcmToken,
            $title,
            $message,
            [
                'type' => $type,
                'booking_id' => (string) $bookingId,
            ]
        );
    }
}
