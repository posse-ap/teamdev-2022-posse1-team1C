<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function mentee_chat($thread_id)
    {
        $user_id = Auth::id();
        $thread = Thread::find($thread_id);
        $is_mentor = 0;
        if (isset($thread) && $thread->mentee_user_id === $user_id) {
            return view('chat.index', compact('thread_id', 'is_mentor'));
        } else {
            // TODO:back()に変更
            return redirect('top');
        }
    }

    public function mentor_chat($thread_id)
    {
        $user_id = Auth::id();
        $thread = Thread::find($thread_id);
        $is_mentor = 1;
        if (isset($thread) && $thread->mentor_user_id === $user_id) {
            return view('chat.index', compact('thread_id', 'is_mentor'));
        } else {
            // TODO:back()に変更
            return redirect('top');
        }
    }
}
