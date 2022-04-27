<?php

namespace App\Http\Controllers\Api;

use App\Chat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
  public function index()
  {
    return Chat::get();
  }

  public function store(Request $request)
  {
    $form = $request->all();
    unset($form['_token']);
    Chat::create($form);
  }
}
