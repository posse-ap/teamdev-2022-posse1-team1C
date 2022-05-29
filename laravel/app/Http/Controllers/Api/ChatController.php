<?php

namespace App\Http\Controllers\Api;

use App\Chat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index($thread_id)
    {
        return Chat::where('thread_id', $thread_id)->get();
    }

    public function store(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Chat::create($form);
    }
}
