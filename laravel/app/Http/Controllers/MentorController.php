<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Mentor;
use App\Thread;

class MentorController extends Controller
{
    public function register()
    {
        return view('auth.mentor.register');
    }
    public function register_confirm()
    {
        return view('auth.mentor.register_confirm');
    }

    public function edit_profile()
    {
        return view('edit.mentor.profile');
    }

    public function request_list()
    {
        // ユーザーIDを取得
        $user_id = Auth::id();
            // dd($user_id);

        // メンターかどうか取得
        $is_mentor = Auth::user()->is_mentor;
        $connect_users = Auth::user()->threads_for_mentor()->with('getMentee')->get();
                // dd($threads);
        
        return view('schedule.get_mentee', compact('connect_users'));
    }
}
