<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    // Show the contact form
    public function showForm()
    {
        return view('contact');
    }

    // Handle the form submission
    public function submitForm(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
      $adminemailid = env('MAIL_FROM_ADDRESS');

    // Store the contact message in the database
    $contactMessage = ContactMessage::create($request->all());

try {
    // Send email to admin
    Mail::to($adminemailid)->send(new ContactFormMail($contactMessage, 'Admin'));
} catch (\Exception $e) {
    Log::error('Failed to send contact form mail to admin', [
        'email' => $adminemailid,
        'error' => $e->getMessage(),
    ]);
}

try {
    // Send email to user (customer)
    Mail::to($contactMessage->email)->send(new ContactFormMail($contactMessage, 'User'));
} catch (\Exception $e) {
    Log::error('Failed to send contact form mail to user', [
        'email' => $contactMessage->email,
        'error' => $e->getMessage(),
    ]);
}
    // Return a response
    return back()->with('success', 'Your message has been sent successfully.');
}


    public function getAllContactMessages()
    {
        // Retrieve all contact messages from the database
        $contactMessages = ContactMessage::all();

        // Return the data to the view
        return response()->json($contactMessages);
    }


}
