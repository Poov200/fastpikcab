<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class PaymentSubmittedNotification extends Notification
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
            'title'      => 'Payment Received',
            'message'    => 'Driver sent ₹' . $this->commission->amount . ' for Booking #' . $this->commission->booking_id,
            'booking_id' => $this->commission->booking_id,
            'type'       => 'commission_payment'
        ];
    }
}
