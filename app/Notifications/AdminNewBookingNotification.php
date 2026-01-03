<?php

namespace App\Notifications;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class AdminNewBookingNotification extends Notification
{
    use Queueable;

    public Booking $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'type'       => 'new_booking',
            'title'      => 'New Booking Received 🚕',
            'message'    => 'Pickup: ' . $this->booking->pickup,
            'booking_id' => $this->booking->id,
            'booking_no' => $this->booking->booking_id,
        ];
    }
}
