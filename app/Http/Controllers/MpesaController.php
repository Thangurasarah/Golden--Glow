<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Safaricom\Mpesa\Mpesa;
use Illuminate\Support\Facades\Log;

class MpesaController extends Controller
{
    public function stkPush(Request $request)
    {
        // Validate the checkout form data
        $request->validate([
            'phone' => 'required|string|min:10',
            'amount' => 'required|numeric|min:1',
        ]);

        $mpesa = new Mpesa();

        $BusinessShortCode = env('MPESA_SHORTCODE');
        $LipaNaMpesaPasskey = env('MPESA_PASSKEY');
        $TransactionType = "CustomerPayBillOnline";
        $Amount = $request->amount;
        $PartyA = $request->phone; // Customer's phone number
        $PartyB = $BusinessShortCode;
        $PhoneNumber = $request->phone;
        $CallBackURL = env('MPESA_CALLBACK_URL');
        $AccountReference = "Beauty Shop";
        $TransactionDesc = "Payment for order";
        $Timestamp = date('YmdHis');
        $Password = base64_encode($BusinessShortCode . $LipaNaMpesaPasskey . $Timestamp);

        $response = $mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $Timestamp,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            "Beauty Shop Payment"
        );

        return response()->json($response);
    }
}
