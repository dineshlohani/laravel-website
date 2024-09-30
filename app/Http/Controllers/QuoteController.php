<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'nullable|string|max:255',
        'message' => 'required|string',
    ]);

    try {
        // Create a new quote record
        Quote::create($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    } catch (\Exception $e) {
        // Redirect back with an error message
        return redirect()->back()->with('error', 'There was an error submitting your message. Please try again.');
    }
    }

    public function getTotalQuotes()
    {
        try {
            // Get the total number of quotes
            $totalQuotes = Quote::count();

            // Return a JSON response with the count
            return response()->json(['success' => true, 'totalQuotes' => $totalQuotes]);
        } catch (\Exception $e) {
            // Return a JSON response with an error message
            return response()->json(['success' => false, 'message' => 'There was an error retrieving the quote count.']);
        }
    }
    


}