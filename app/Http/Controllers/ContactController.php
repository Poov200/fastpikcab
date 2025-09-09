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

        $adminEmail = env('MAIL_FROM_ADDRESS');

        // Store the contact message first ✅
        $contactMessage = ContactMessage::create($request->all());

        // Try sending mail to admin
        try {
            if ($adminEmail) {
                Mail::to($adminEmail)->send(new ContactFormMail($contactMessage, 'Admin'));
            }
        } catch (\Exception $e) {
            Log::error('Failed to send contact form mail to admin', [
                'email' => $adminEmail,
                'error' => $e->getMessage(),
            ]);
        }

        // Try sending mail to user
        try {
            Mail::to($contactMessage->email)->send(new ContactFormMail($contactMessage, 'User'));
        } catch (\Exception $e) {
            Log::error('Failed to send contact form mail to user', [
                'email' => $contactMessage->email,
                'error' => $e->getMessage(),
            ]);
        }

        // Always return success ✅
        return back()->with('success', 'Your message has been submitted successfully. We will contact you soon.');
    }



    public function getAllContactMessages()
    {
        // Retrieve all contact messages from the database
        $contactMessages = ContactMessage::all();

        // Return the data to the view
        return response()->json($contactMessages);
    }
}
