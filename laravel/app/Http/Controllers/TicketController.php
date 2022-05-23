<?php

namespace App\Http\Controllers;

use App\PayPay;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('ticket.index');
    }

    public function purchase(Request $request)
    {
        $user_id = $request->user_id;
        $data = PayPay::createUrl($user_id);
        $data = json_decode($data);
        $merchant_payment_id = $data->merchantPaymentId;
        $url = $data->url;
        return redirect($url);
    }
}
