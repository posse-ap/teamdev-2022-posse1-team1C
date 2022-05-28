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
        $is_mentor = Auth::user()->where('id' , $user_id)->get('is_mentor');
            // dd($is_mentor);
        
        if ($is_mentor == true) {
            // 自分のidと同じメンターidを含むスレッドを取得
        $my_threads = Thread::where('mentor_user_id' , $user_id)->get('mentee_user_id');
            // dd($my_threads);
            
            
        // スレッドを分解して1つ1つユーザーテーブルから検索していく
        foreach ($my_threads as $my_thread) {
            $request_users = User::where('id' , '$my_thread');
        }

            // $request_users = User::where('id' , '$my_threads');

        } else {
            // 自分のidと同じメンターidを含むスレッドを取得
        $my_threads = Thread::where('mentee_user_id' , '$user_id')->get('mentor_user_id');
            // dd($my_threads);

            // スレッドを分解して1つ1つユーザーテーブルから検索していく
            foreach ($my_threads as $my_thread) {
                $request_users = User::where('id' , '$my_thread');
                
            }
                // dd($request_users);
            // $request_users = User::where('id' , '$my_threads');
        }
        return view('schedule.request_list', compact('request_users'));
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
