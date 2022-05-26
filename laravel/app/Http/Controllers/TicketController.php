<?php

namespace App\Http\Controllers;

use App\Payment;
use App\PayPay;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        Payment::convertToTicket($user_id);
        $ticket = Auth::user()->ticket;
        return view('ticket.index', compact('ticket'));
    }

    public function purchase()
    {
        $user_id = Auth::id();
        $data = PayPay::createUrl($user_id);
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

    public function consume()
    {
        $user = Auth::user();
        if ($user->ticket <= 0) {
            return back();
        }
        $user->ticket--;
        $user->save();
        return view('schedule.index');
    }
}
