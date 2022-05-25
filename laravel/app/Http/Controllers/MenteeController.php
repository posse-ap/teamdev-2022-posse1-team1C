<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenteeController extends Controller
{
    public function register()
    {
        return view('auth.mentee.register');
    }

    public function register_confirm()
    {
        return view('auth.mentee.register_confirm');
    }

    public function edit_profile()
    {
        return view('edit.mentee.profile');
    }

    public function request_list()
    {
        return view('schedule.request_list');
    }
}
