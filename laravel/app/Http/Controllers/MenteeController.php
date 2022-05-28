<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\User;
use App\ScheduleAdjustment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function survey_reason(Request $request)
    {
        $users = Auth::user();
        $schedule_adjustment_id = ScheduleAdjustment::with('id');
        $is_mentor = $users->is_mentor;
        Feedback::insert([
            'content' => $request['opinion'],
            'is_mentor' => $is_mentor,
            'schedule_adjustment_id' => 1,
        ]);
       
        return view('survey.reason',compact('users'));
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
