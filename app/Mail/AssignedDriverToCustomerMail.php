<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AssignedDriverToCustomerMail extends Mailable
{
        public $booking;
    public $driver;

    public function __construct($booking, $driver)
    {
        $this->booking = $booking;
        $this->driver = $driver;
    }

    public function build()
    {
        return $this->subject('Your Driver Has Been Assigned')
                    ->view('emails.assigned_driver_customer')
                    ->with([
                        'booking' => $this->booking,
                        'driver' => $this->driver,
                    ]);
    }
}
