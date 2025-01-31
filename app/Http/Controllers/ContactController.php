<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the form data (e.g., send an email, save to database, etc.)
        // For now, we'll just redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
