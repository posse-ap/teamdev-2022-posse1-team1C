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

    public function survey_question()
    {
        return view('survey.question');
    }

    public function survey_reason()
    {
        return view('survey.reason');
    }

    public function survey_cancel_reason()
    {
        return view('survey.cancel_reason');
    }

    public function inquiry()
    {
        return view('auth.mentee.inquiry');
    }

    public function request_list()
    {
        return view('schedule.request_list');
    }
}
