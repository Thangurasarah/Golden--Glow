<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function checkout()
    {
        // Fetch cart items (example)
        $cartItems = Session::get('cart', []);
        $totalPrice = array_sum(array_column($cartItems, 'price'));

        return view('checkout', compact('cartItems', 'totalPrice'));
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

        // Store order logic (save to DB, process payment, etc.)

        return redirect('/thank-you')->with('success', 'Order placed successfully!');
    }
}
