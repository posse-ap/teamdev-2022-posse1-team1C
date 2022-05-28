<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'merchantPaymentId',
        'user_id',
        'payment_status_id',
    ];

    public static function convertToTicket($user_id)
    {
        $payments = self::where('user_id', $user_id)->get();
        $user = User::find($user_id);
        $ticket = $user->ticket;
        foreach ($payments as $payment) {
            if ($payment->payment_status_id === 1) {
                $is_paid = PayPay::checkPayment($payment->merchantPaymentId);
                if ($is_paid) {
                    $payment->payment_status_id = 3;
                    $payment->save();
                    $ticket++;
                } else {
                    $payment->payment_status_id = 2;
                    $payment->save();
                }
            }
        }
        $user->ticket = $ticket;
        $user->save();
        return $ticket;
    }
}
