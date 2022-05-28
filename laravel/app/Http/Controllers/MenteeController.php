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

    public function request_list()
    {
        // ユーザーIDを取得
        $user_id = Auth::id();
        
        // メンターかどうか取得
        $is_mentor = Auth::user()->get('is_mentor');
        
        if ($is_mentor == 1) {
            // 自分のidと同じメンターidを含むスレッドを取得
            $my_threads = Thread::where('mentor_user_id' , '$user_id')->get('mentee_user_id');

            // スレッドを分解して1つ1つユーザーテーブルから検索していく
            foreach ($my_threads as $my_thread) {
                $request_users = User::where('id' , '$my_thread');
            }
        } else {
            // 自分のidと同じメンターidを含むスレッドを取得
            $my_threads = Thread::where('mentee_user_id' , '$user_id')->get('mentor_user_id');

            // スレッドを分解して1つ1つユーザーテーブルから検索していく
            foreach ($my_threads as $my_thread) {
                $request_users = User::where('id' , '$my_thread');
            }
        }
        return view('schedule.request_list', compact('request_users'));
    }

    public function inquiry()
    {
        return view('auth.mentee.inquiry');
    }
}
