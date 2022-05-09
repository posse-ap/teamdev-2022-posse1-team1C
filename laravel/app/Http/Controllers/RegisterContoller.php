<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function index()
    {
        return view('home');
    }

    public function MenteeRegister()
    {
        return view('auth.mentee_register');
    }

    public function MenterRegister()
    {
        return view('auth.menter_register');
    }
}
