<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Define custom error messages
        $messages = [
            'contact_no.regex' => 'Invalid contact number',
            'email.email' => 'Invalid email address',
        ];

        // Validate the request data with custom messages
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'contact_no' => ['nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10', 'max:15'],
            'message' => 'required|string',
        ], $messages);

        try {
            // Create a new contact record
            Contact::create($validatedData);

            // Return a JSON response for AJAX with the sender's name
            return response()->json(['success' => true, 'name' => $validatedData['name'], 'message' => 'Your message has been sent successfully!']);
        } catch (\Exception $e) {
            // Return a JSON response for AJAX
            return response()->json(['success' => false, 'message' => 'There was an error submitting your message. Please try again.']);
        }
    }
}
