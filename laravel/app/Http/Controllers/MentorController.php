<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function register_confirm()
    {
        return view('auth.mentor.register_confirm');
    }

}
