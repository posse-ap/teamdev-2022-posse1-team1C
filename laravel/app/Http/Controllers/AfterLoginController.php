<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfterLoginController extends Controller
{
    public function index()
    {
        $user  =  Auth::user()
        dd($user);
        if (condition) {
            # code...
        } else {
            # code...
        }
        
        return redirect('auth.mentee.register');
    }
}
