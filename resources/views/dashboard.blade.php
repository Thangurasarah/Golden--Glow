<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

@include('navigation-menu')


<body class="pt-24 bg-white">
    <section class="relative bg-no-repeat bg-right h-screen bg-[length:50%_auto]" 
    style="background-image: url('{{ asset('beauty.jpg') }}'); height: 50vh;">
        <div class="absolute inset-0  flex items-center justify-center ">
            <div class="absolute left-10 top-1/2 transform -translate-y-1/2 pt-48 text-left text-black px-6 max-w-[500px]">
                <h2 class="text-5xl font-bold mb-4">Radiate Confidence with Golden Glow</h2>
                <p class="text-lg mb-6">Discover beauty products that enhance your natural glow.</p>
                <a href="#" class="bg-brown-600 Custom-text py-3 px-6 rounded-lg text-lg">Shop Now</a>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-16 pt-32 container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-10">Featured Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white shadow-md p-4 rounded-lg">
                <img src="{{ asset('Lipstick1.jpg') }}" alt="Product" class="w-full rounded-lg height:40vh">
                <h3 class="text-xl font-semibold mt-4">Luxury Lipstick</h3>
                <p class="text-gray-600">A long-lasting, hydrating lipstick.</p>
                <p class="font-bold text-brown-600 mt-2">$19.99</p>
                <button class="bg-brown-600 text-white py-2 px-4 rounded-lg mt-4">Add to Cart</button>
            </div>

            <div class="bg-white shadow-md p-4 rounded-lg">
                <img src="{{ asset('Lipstick7.jpg') }}" alt="Product" class="w-full rounded-lg">
                <h3 class="text-xl font-semibold mt-4">Luxury Lipstick</h3>
                <p class="text-gray-600">A long-lasting, hydrating lipstick.</p>
                <p class="font-bold text-brown-600 mt-2">$19.99</p>
                <button class="bg-brown-600 text-white py-2 px-4 rounded-lg mt-4">Add to Cart</button>
            </div>
            <div class="bg-white shadow-md p-4 rounded-lg">
                <img src="{{ asset('Lipstick3.jpg') }}" alt="Product" class="w-full rounded-lg height:40vh">
                <h3 class="text-xl font-semibold mt-4">Luxury Lipstick</h3>
                <p class="text-gray-600">A long-lasting, hydrating lipstick.</p>
                <p class="font-bold text-brown-600 mt-2">$19.99</p>
                <button class="bg-brown-600 text-white py-2 px-4 rounded-lg mt-4">Add to Cart</button>
            </div>
            <div class="bg-white shadow-md p-4 rounded-lg">
                <img src="{{ asset('Lipstick2.jpg') }}" alt="Product" class="w-full rounded-lg height:40vh">
                <h3 class="text-xl font-semibold mt-4">Luxury Lipstick</h3>
                <p class="text-gray-600">A long-lasting, hydrating lipstick.</p>
                <p class="font-bold text-brown-600 mt-2">$19.99</p>
                <button class="bg-brown-600 text-white py-2 px-4 rounded-lg mt-4">Add to Cart</button>
            </div>
            <div class="bg-white shadow-md p-4 rounded-lg">
                <img src="{{ asset('Lipstick1.jpg') }}" alt="Product" class="w-full rounded-lg height:40vh">
                <h3 class="text-xl font-semibold mt-4">Luxury Lipstick</h3>
                <p class="text-gray-600">A long-lasting, hydrating lipstick.</p>
                <p class="font-bold text-brown-600 mt-2">$19.99</p>
                <button class="bg-brown-600 text-white py-2 px-4 rounded-lg mt-4">Add to Cart</button>
            </div>
            <div class="bg-white shadow-md p-4 rounded-lg">
                <img src="{{ asset('Lipstick8.jpg') }}" alt="Product" class="w-full rounded-lg height:40vh">
                <h3 class="text-xl font-semibold mt-4">Luxury Lipstick</h3>
                <p class="text-gray-600">A long-lasting, hydrating lipstick.</p>
                <p class="font-bold text-brown-600 mt-2">$19.99</p>
                <button class="bg-brown-600 text-white py-2 px-4 rounded-lg mt-4">Add to Cart</button>
            </div>
            <!-- Repeat for more products -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 mt-16">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Golden Glow. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
