<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
 function checkout(){
    $cartItems = Session::get('cart', []);
    $totalPrice = array_sum(array_column($cartItems, 'price'));

    return view('checkout',compact('cartItems', 'totalPrice'));
 }
    public function processCheckout(Request $request)
    {
        // Validate checkout form
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'payment_method' => 'required|string'
        ]);

        // Fetch cart items & calculate total price
        $cartItems = Session::get('cart', []);
        $totalPrice = array_sum(array_column($cartItems, 'price'));

        // If payment method is M-Pesa, initiate STK Push
        if ($request->payment_method === 'mpesa') {
            $response = $this->stkPushRequest($request->phone, $totalPrice);

            if (isset($response['ResponseCode']) && $response['ResponseCode'] == '0') {
                return redirect('/thank-you')->with('success', 'M-Pesa payment request sent. Complete payment on your phone.');
            } else {
                return redirect('/checkout')->with('error', 'M-Pesa payment failed. Try again.');
            }
        }

        // TODO: Implement other payment methods (Credit Card, PayPal)

        return redirect('/thank-you')->with('success', 'Order placed successfully!');
    }

    /**
     * Initiate STK Push Request to M-Pesa API
     */
    private function stkPushRequest($phone, $amount)
    {
        // Fetch credentials from config (stored in config/services.php)
        $consumerKey = config('services.mpesa.consumer_key');
        $consumerSecret = config('services.mpesa.consumer_secret');
        $shortcode = config('services.mpesa.shortcode');
        $passkey = config('services.mpesa.passkey');
        $callbackUrl = config('services.mpesa.callback_url');

        // Get M-Pesa Access Token
        $authResponse = Http::withBasicAuth($consumerKey, $consumerSecret)
            ->get('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');

        $token = $authResponse->json()['access_token'] ?? null;
        if (!$token) {
            return ['ResponseCode' => '1', 'ResponseDescription' => 'Failed to get M-Pesa access token'];
        }

        // Generate Password (Shortcode + Passkey + Timestamp)
        $timestamp = date('YmdHis');
        $password = base64_encode($shortcode . $passkey . $timestamp);

        // Initiate STK Push
        $stkResponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json'
        ])->post('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest', [
            "BusinessShortCode" => $shortcode,
            "Password" => $password,
            "Timestamp" => $timestamp,
            "TransactionType" => "CustomerPayBillOnline",
            "Amount" => $amount,
            "PartyA" => $phone,
            "PartyB" => $shortcode,
            "PhoneNumber" => $phone,
            "CallBackURL" => $callbackUrl,
            "AccountReference" => "BeautyShop",
            "TransactionDesc" => "Payment for order"
        ]);

        return $stkResponse->json();
    }
}
