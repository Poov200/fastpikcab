<?php

namespace App\Mail;
use App\Models\Booking;
use App\Models\Driver;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReassignedDriverToCustomerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $driver;

    public function __construct(Booking $booking, Driver $driver)
    {
        $this->booking = $booking;
        $this->driver = $driver;
    }

    public function build()
    {
        return $this->subject('Updated Booking – Your Driver Has Been Changed')
                    ->view('emails.customer_reassigned_driver');
    }
}
