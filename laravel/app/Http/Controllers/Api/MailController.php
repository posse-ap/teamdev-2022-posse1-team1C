<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ToMentorScheduleAdjustmentRemindMail;
use App\Mail\ToBothRequestCancelMail;
use App\Mail\ToMenteeRequestConfirmMail;
use App\Mail\ToBothTheDayBeforeRemindMail;

class MailController extends Controller
{
    public function sendToMentorScheduleAdjustmentRemindMail(Request $request)
    {
        $content = $request->input('content'); 
        $user = auth()->user();
	
	Mail::to("testMentor@com")->send(new ToMentorScheduleAdjustmentRemindMail($content));

    // メール送信後の処理を以下に書く
    }

    public function sendToBothRequestCancelMail(Request $request)
    {
        $content = $request->input('content'); 
        $user = auth()->user();
        $emails = [
            'testMentee@com',
            'testMentor@com',
        ];
        Mail::to($emails)->send(new ToBothRequestCancelMail($content));

    // メール送信後の処理を以下に書く
    }

    public function sendToMenteeRequestConfirmMail(Request $request)
    {
        $content = $request->input('content'); 
        $user = auth()->user();
	
	Mail::to("testMentee@com")->send(new ToMenteeRequestConfirmMail($content));

    // メール送信後の処理を以下に書く
    }

    public function sendToBothTheDayBeforeRemindMail(Request $request)
    {
        $content = $request->input('content'); 
        $user = auth()->user();
        $emails = [
            'testMentee@com',
            'testMentor@com',
        ];
	Mail::to($emails)->send(new ToBothTheDayBeforeRemindMail($content));

    // メール送信後の処理を以下に書く
    }
}