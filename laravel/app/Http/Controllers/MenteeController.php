<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenteeController extends Controller
{
    public function mentee_register()
    {
        return view('auth.mentee_register');
    }

    public function mentee_register_Confirm()
    {
        return view('auth.mentee_register_confirm');
    }
}
