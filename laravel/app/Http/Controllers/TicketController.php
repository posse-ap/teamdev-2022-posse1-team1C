<?php

namespace App\Http\Controllers;

use App\Payment;
use App\PayPay;
use App\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $user_id = 1;
        Payment::convertToTicket($user_id);
        $ticket = User::find($user_id)->ticket;
        return view('ticket.index', compact('ticket'));
    }

    public function purchase(Request $request)
    {
        $user_id = $request->user_id;
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

    public function consume(Request $request)
    {
        $user_id = $request->user_id;
        $user = User::find($user_id);
        $user->ticket--;
        $user->save();
        return view('schedule.index');
    }
}
