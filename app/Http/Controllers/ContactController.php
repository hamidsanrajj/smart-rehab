<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function query(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');

        Contact::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message
        ]);

        return view('index');
    }
}
