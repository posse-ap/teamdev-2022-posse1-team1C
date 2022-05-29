<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Payment;
use App\PayPay;
use App\Thread;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index($mentor_user_id)
    {
        $user_id = Auth::id();
        $ticket = Payment::convertToTicket($user_id);
        return view('ticket.index', compact('ticket', 'mentor_user_id'));
    }

    public function purchase($mentor_user_id)
    {
        $user_id = Auth::id();
        $data = PayPay::createUrl($user_id, $mentor_user_id);
        $data = json_decode($data);
        $merchant_payment_id = $data->merchantPaymentId;
        $url = $data->url;

        $payment = new Payment([
            'user_id' => $user_id,
            'merchantPaymentId' => $merchant_payment_id,
            'payment_status_id' => 1,
        ]);
        $payment->save();

        return redirect($url);
    }

    public function consume($mentor_user_id)
    {
        $user = Auth::user();
        if ($user->ticket <= 0) {
            return back();
        }
        $user->ticket--;
        $user->save();
        $thread = Thread::where('mentor_user_id', $mentor_user_id)
            ->where('mentee_user_id', Auth::id());
        if (isset($thread->id)) {
            return view('schedule.index');
        } else {
            Thread::create([
                'mentee_user_id' => $user->id,
                'mentor_user_id' => $mentor_user_id,
            ]);
            return view('schedule.index');
        }
    }
}
