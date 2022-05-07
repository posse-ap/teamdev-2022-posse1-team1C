<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallController extends Controller
{
    public function index()
    {
        return view('call.index');
    }

    public function beforecall()
    {
        return view('call.before_call');
    }
}
