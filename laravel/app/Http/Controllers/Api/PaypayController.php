<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PayPay\OpenPaymentAPI\Client;
use PayPay\OpenPaymentAPI\Models\CreateQrCodePayload;
use PayPay\OpenPaymentAPI\Models\OrderItem;

class PaypayController extends Controller
{
    public function index()
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
        $CQCPayload->setMerchantPaymentId("Mr_Kotani_please_help_me");

        // Log time of request
        $CQCPayload->setRequestedAt();
        // Indicate you want QR Code
        $CQCPayload->setCodeType("ORDER_QR");

        // Provide order details for invoicing
        $OrderItems = [];
        $OrderItems[] = (new OrderItem())
            ->setName('Cake')
            ->setQuantity(1)
            ->setUnitPrice(['amount' => 20, 'currency' => 'JPY']);
        $CQCPayload->setOrderItems($OrderItems);

        // Save Cart totals
        $amount = [
            "amount" => 1,
            "currency" => "JPY"
        ];
        $CQCPayload->setAmount($amount);
        // Configure redirects
        $CQCPayload->setRedirectType('WEB_LINK');
        $CQCPayload->setRedirectUrl('https://paypay.ne.jp/');

        $CQCPayload->setIsAuthorization(false);
        $CQCPayload->setUserAgent($_SERVER['HTTP_USER_AGENT']);

        // Get data for QR code
        $response = $client->code->createQRCode($CQCPayload);

        $data = $response['data'];
        return json_encode($data);
    }
}
