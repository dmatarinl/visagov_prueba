<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contacto');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'message' => 'required|max:1000',
        ]);

        return back()->with('success', __('validation.message_sent_successfully'));
    }
}
