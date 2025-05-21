<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;



class ContactFormMail extends Mailable
{
    public $contactMessage;
    public $type; // 'Admin' or 'User'

    public function __construct($contactMessage, $type = 'Admin')
    {
        $this->contactMessage = $contactMessage;
        $this->type = $type;
    }

    public function build()
    {
        if ($this->type === 'Admin') {
            return $this->subject('New Contact Form Submission')
                        ->view('emails.contact.admin')
                        ->with(['contactMessage' => $this->contactMessage]);
        } else {
            return $this->subject('Thank You for Contacting Us')
                        ->view('emails.contact.user')
                        ->with(['contactMessage' => $this->contactMessage]);
        }
    }
}


