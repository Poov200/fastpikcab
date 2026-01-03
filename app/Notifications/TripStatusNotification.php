<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class TripStatusNotification extends Notification
{
    use Queueable;

    private $title;
    private $message;
    private $booking;
    private $type;

    public function __construct($title, $message, $booking, $type)
    {
        $this->title = $title;
        $this->message = $message;
        $this->booking = $booking;
        $this->type = $type;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'title' => $this->title,
            'message' => $this->message,
            'booking_id' => $this->booking->id,
            'booking_number' => $this->booking->booking_id,
            'type' => $this->type,
        ];
    }
}
