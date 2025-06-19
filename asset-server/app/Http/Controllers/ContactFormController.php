<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StoreContactFormRequest;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:20',
            'service' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        $submission = ContactForm::create($data);

        return response()->json([
            'message' => 'Form submitted successfully',
            'data' => $submission
        ], 201);
    }
}