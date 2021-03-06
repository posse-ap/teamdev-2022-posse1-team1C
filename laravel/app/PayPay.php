<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use PayPay\OpenPaymentAPI\Client;
use PayPay\OpenPaymentAPI\Models\CreateQrCodePayload;
use PayPay\OpenPaymentAPI\Models\OrderItem;

class PayPay extends Model
{
    public static function createUrl($user_id, $mentor_user_id)
    {
        $client = new Client([
            'API_KEY' => config('paypay.key'),
            'API_SECRET' => config('paypay.secret'),
            'MERCHANT_ID' => config('paypay.merchant'),
        ], false);

        /*
           .....initialize SDK
           */
        // setup payment object
        $CQCPayload = new CreateQrCodePayload();

        // Set merchant pay identifier
        $today = new Carbon('now');
        $CQCPayload->setMerchantPaymentId($user_id . '_' . $today);

        // Log time of request
        $CQCPayload->setRequestedAt();
        // Indicate you want QR Code
        $CQCPayload->setCodeType("ORDER_QR");

        // Provide order details for invoicing
        $OrderItems = [];
        $OrderItems[] = (new OrderItem())
            ->setName('チケット')
            ->setQuantity(1)
            ->setUnitPrice(['amount' => 1200, 'currency' => 'JPY']);
        $CQCPayload->setOrderItems($OrderItems);

        // Save Cart totals
        $amount = [
            "amount" => 1200,
            "currency" => "JPY"
        ];
        $CQCPayload->setAmount($amount);
        // Configure redirects
        $CQCPayload->setRedirectType('WEB_LINK');
        $CQCPayload->setRedirectUrl(route('mentee.ticket', $mentor_user_id));

        $CQCPayload->setIsAuthorization(false);
        $CQCPayload->setUserAgent($_SERVER['HTTP_USER_AGENT']);

        // Get data for QR code
        $response = $client->code->createQRCode($CQCPayload);

        $data = $response['data'];
        return json_encode($data);
    }

    public static function checkPayment($merchant_payment_id)
    {
        $client = new Client([
            'API_KEY' => config('paypay.key'),
            'API_SECRET' => config('paypay.secret'),
            'MERCHANT_ID' => config('paypay.merchant'),
        ], false);

        $response = $client->code->getPaymentDetails($merchant_payment_id);
        $data = $response['data'];
        return ($data['status'] === 'COMPLETED' ? true : false);
    }
}
