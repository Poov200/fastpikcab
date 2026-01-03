<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class PaymentVerifiedNotification extends Notification
{
    use Queueable;

    public $commission;

    public function __construct($commission)
    {
        $this->commission = $commission;
    }

    public function via($notifiable)
    {
        return ['database']; // This saves to the 'notifications' table
    }

    public function toArray($notifiable)
    {
        return [
            'title'      => 'Payment Verified',
            'message'    => 'Your payment for Booking #' . $this->commission->booking_id . ' has been verified.',
            'booking_id' => $this->commission->booking_id,
            'type'       => 'payment_verified'
        ];
    }
}
