<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMenteePost;
use App\User;
use Illuminate\Support\Facades\Hash;

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

            //送信完了ページのviewを表示
            return view('auth.login');
            
        }
    }

    public function edit_profile()
    {
        return view('edit.mentee.profile');
    }
}
