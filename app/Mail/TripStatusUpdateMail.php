<?php
namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TripStatusUpdateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $recipientType;

    public function __construct(Booking $booking, $recipientType)
    {
        $this->booking = $booking;
        $this->recipientType = $recipientType; // 'customer' or 'admin'
    }

    public function build()
    {
        $subject = match ($this->booking->trip_status) {
            'cancelled' => 'Trip Cancelled Notification',
            'delay' => 'Trip Delayed Notification',
            'completed' => 'Trip Completed Notification',
            default => 'Trip Update'
        };

        return $this->subject($subject)
                    ->view('emails.trip_status_update');
    }
}
