<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="{{ asset('js/app.js') }}"></script> 
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('Custom.css') }}">
</head>

<body class="bg-gray-100">


    <div class="container mx-auto p-6">
        <h2 class="text-3xl font-bold mb-6 text-center">Checkout</h2>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Billing Details -->
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h3 class="text-xl font-semibold mb-4">Billing Details</h3>
                <form action="{{ route('checkout.process') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700">Full Name</label>
                        <input type="text" name="name" required class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Email Address</label>
                        <input type="email" name="email" required class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Phone Number</label>
                        <input type="text" name="phone" required class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Address</label>
                        <input type="text" name="address" required class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">City</label>
                        <input type="text" name="city" required class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Payment Method</label>
                        <select name="payment_method" required class="w-full border p-2 rounded">
                            <option value="mpesa">M-Pesa</option>
                            <option value="credit_card">Credit Card</option>
                            <option value="paypal">PayPal</option>
                        </select>
                    </div>

                    <button type="submit"
                        class="w-full bg-pink-500 text-white p-3 rounded-lg hover:bg-pink-600 transition">
                        Place Order
                    </button>
                </form>
            </div>

            <!-- Order Summary -->
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h3 class="text-xl font-semibold mb-4">Order Summary</h3>

              <div class="border-b pb-4 mb-4">
                    @foreach ($cartItems as $item)
                        <div class="flex justify-between mb-2">
                            <span>{{ $item->name }}</span>
                            <span>KES {{ number_format($item->price, 2) }}</span>
                        </div>
                    @endforeach
                </div>

                <div class="flex justify-between font-semibold text-lg">
                    <span>Total:</span>
                    <span>KES {{ number_format($totalPrice, 2) }}</span>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
