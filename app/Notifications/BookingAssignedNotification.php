<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class BookingAssignedNotification extends Notification
{
    use Queueable;

    private $booking;

    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    // ✅ ONLY DATABASE
    public function via($notifiable)
    {
        return ['database'];
    }

    // 📦 DATABASE PAYLOAD (APP NOTIFICATION PAGE)
    public function toArray($notifiable)
    {
        return [
            'title' => 'New Ride Assigned 🚕',
            'message' => 'Booking '.$this->booking->booking_id.' assigned to you',
            'booking_id' => $this->booking->id,
            'type' => 'booking_assigned',
        ];
    }
}
