<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:50',
            'budget' => 'nullable|string|max:50',
            'message' => 'required|string|max:5000',
            'privacy' => 'accepted',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $contact = Contact::create([
                'first_name' => $request->firstName,
                'last_name' => $request->lastName,
                'email' => $request->email,
                'phone' => $request->phone,
                'company' => $request->company,
                'service' => $request->service,
                'budget' => $request->budget,
                'message' => $request->message,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been sent successfully.',
            ], 201);

        } catch (\Exception $e) {
            // Log the error internally for debugging
            \Log::error('Contact form submission failed', [
                'error' => $e->getMessage(),
                'email' => $request->email ?? 'unknown'
            ]);
            
            // Return generic message to user (no internal details exposed)
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while sending your message. Please try again later.'
            ], 500);
        }
    }
}
