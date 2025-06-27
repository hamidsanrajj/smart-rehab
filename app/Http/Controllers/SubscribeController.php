<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribe;

class SubscribeController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $email = $request->input('email');

        Subscribe::create([
            'email' => $email,
        ]);

        return view('index');
    }

}
