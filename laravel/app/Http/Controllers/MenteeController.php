<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Http\Requests\StoreMenteePost;
use App\User;
use App\Mentor;
use App\Thread;

class MenteeController extends Controller
{
    public function register_show()
    {
        return view('auth.mentee.register');
    }

    public function register_confirm(StoreMenteePost $request)
    {
        $inputs = $request->all();
        return view('auth.mentee.register_confirm',compact("inputs"));
    }

    public function register_send(Request $request)
    {
        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');
        
        //フォームから受け取ったactionを除いたinputの値を取得
        $inputs = $request->except('action');
        
        //actionの値で分岐
        if($action !== 'submit'){
            return redirect()
            ->route('mentee.register_show')
            ->withInput($inputs);
        } else {
            //入力されたメールアドレスにメールを送信
            // \Mail::to($inputs['email'])->send(new ContactSendmail($inputs));
            
            // 再送信を防ぐためにトークンを再発行
            $request->session()->regenerateToken();

            // データベースに値をinsert
            User::create([
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'is_mentor' => 0,
                'ticket' => 0,
            ]);

            //登録後ログイン画面ページのviewを表示
            return view('auth.login');
            
        }
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
