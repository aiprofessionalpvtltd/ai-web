<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        try {
            // Define custom error messages for validation
            $customMessages = [
                'required' => 'The :attribute field is required.',
                'string' => 'The :attribute must be a string.',
                'email' => 'The :attribute must be a valid email address.',
                'max' => 'The :attribute must not exceed :max characters.',
            ];

            // Validate the form data with custom error messages
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'website' => 'nullable|string|max:255',
                'message' => 'required',
            ], $customMessages);


            // If validation passes, proceed to send email
            $validatedData = $validator->validated();
            Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactFormSubmitted($validatedData));

            return response()->json(['message' => 'Contact form submitted successfully']);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
