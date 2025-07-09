<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Store in database
        $submission = ContactSubmission::create($validated);

        // Send email (optional)
        Mail::to('haikal.jamil89@gmail.com')->send(new ContactFormSubmitted($submission));

        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}