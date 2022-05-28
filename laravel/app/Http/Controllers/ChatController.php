<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $thread_id = 1;
        $is_mentor = $user->is_mentor;
        return view('chat.index', compact('thread_id', 'is_mentor'));
    }
}
