<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Mentor;
use App\Thread;

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

    public function request_list()
    {
        // ユーザーIDを取得
        $user_id = Auth::id();
            // dd($user_id);

        // メンターかどうか取得
        $is_mentor = Auth::user()->is_mentor;
        
        // 自分に関係するスレッドのユーザー情報を取得
        $connect_users = Auth::user()->threads_for_mentee()->with('getMentor.mentors')->get();
            // dd($connect_users);
        
        return view('schedule.get_mentor', compact('connect_users'));
    }

    public function inquiry()
    {
        return view('auth.mentee.inquiry');
    }

    public function survey_reason()
    {
        return view('survey.reason');
    }

    public function survey_cancel_reason()
    {
        return view('survey.cancel_reason');
    }
}
