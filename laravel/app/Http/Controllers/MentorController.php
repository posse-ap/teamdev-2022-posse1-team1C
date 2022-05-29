<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreMentorPost;
use App\User;
use App\Mentor;

class MentorController extends Controller
{
    public function register_show()
    {
        return view('auth.mentor.register');
    }

    public function register_confirm(StoreMentorPost $request)
    {
        $inputs = $request->all();
        return view('auth.mentor.register_confirm',compact("inputs"));
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
            ->route('mentor.register_show')
            ->withInput($inputs);
        } else {
            //入力されたメールアドレスにメールを送信
            // \Mail::to($inputs['email'])->send(new ContactSendmail($inputs));
            
            // 再送信を防ぐためにトークンを再発行
            $request->session()->regenerateToken();

            // データベースに値をinsert
            $mentor = User::create([
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'is_mentor' => 1,
                'ticket' => 0,
            ]);

            Mentor::create([
                'user_id' => $mentor->id,
                'company' => $request['company_name'],
                'department' => $request['department_name'],
                'paypay_url' => $request['paypay_link'],
            ]);

            //送信完了ページのviewを表示
            return view('auth.login');
            
        }
    }

}
