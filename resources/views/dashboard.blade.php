<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

@include('navigation-menu')

<body class="pt-20">
    <!-- Hero Section -->
    <section class="relative section-bg bg-no-repeat bg-right h-screen md:bg-[length:50%_auto] sm:bg-none"
        style="background-image: url('{{ asset('beauty.jpg') }}'); height: 50vh;">

        <!-- Content -->
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="absolute sm:left-0 md:left-10 top-1/2 transform -translate-y-1/2 text-left text-white px-6 max-w-[600px] sm:text-center md:text-left">
                <h2 class="text-xl text-1g pt-10 mb-4">NEW RELEASE</h2>
                <h2 class="text-5xl text-1g font-semibold pt-10 mb-4">Radiate Confidence with Golden Glow</h2>
                <p class="text-lg pt-10 mb-6">Discover beauty products that enhance your natural glow.</p>

                <!-- Rounded Button -->
                <a href="#" class="py-3 px-6 rounded-full shadow-md bg-white text-lg text-black">Shop Now</a>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-16 pt-36 container mx-auto px-6">
       <h2 class="text-2xl font-light text-center text-gray-800">MUST HAVES</h2>
        <i><h2 class="text-4xl font-semibold font-italic text-center text-gray-800 mb-8">Best Sellers</h2></i>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white shadow-md p-4 rounded-lg">
                <img src="{{ asset('Lips/Lipstick1.jpg') }}" alt="Product" class="w-full rounded-lg height:40vh">
                <h3 class="text-xl font-semibold mt-4">Luxury Lipstick</h3>
                <p class="text-gray-600">A long-lasting, hydrating lipstick.</p>
                <p class="font-bold text-brown-600 mt-2">$19.99</p>
                <button class="bg-brown-600 text-white py-2 px-4 rounded-lg mt-4">Add to Cart</button>
            </div>

            <div class="bg-white shadow-md p-4 rounded-lg">
                <img src="{{ asset('accessories/accessories2.jpg') }}" alt="Product" class="w-full rounded-lg">
                <h3 class="text-xl font-semibold mt-4">Luxury Lipstick</h3>
                <p class="text-gray-600">A long-lasting, hydrating lipstick.</p>
                <p class="font-bold text-brown-600 mt-2">$19.99</p>
                <button class="bg-brown-600 text-white py-2 px-4 rounded-lg mt-4">Add to Cart</button>
            </div>
            <div class="bg-white shadow-md p-4 rounded-lg">
                <img src="{{ asset('Face/face1.jpg') }}" alt="Product" class="w-full rounded-lg height:40vh">
                <h3 class="text-xl font-semibold mt-4">Luxury Lipstick</h3>
                <p class="text-gray-600">A long-lasting, hydrating lipstick.</p>
                <p class="font-bold text-brown-600 mt-2">$19.99</p>
                <button class="bg-brown-600 text-white py-2 px-4 rounded-lg mt-4">Add to Cart</button>
            </div>
            <div class="bg-white shadow-md p-4 rounded-lg">
                <img src="{{ asset('accessories/Earing1.jpg') }}" alt="Product" class="w-full rounded-lg height:40vh">
                <h3 class="text-xl font-semibold mt-4">Luxury Lipstick</h3>
                <p class="text-gray-600">A long-lasting, hydrating lipstick.</p>
                <p class="font-bold text-brown-600 mt-2">$19.99</p>
                <button class="bg-brown-600 text-white py-2 px-4 rounded-lg mt-4">Add to Cart</button>
            </div>
            <div class="bg-white shadow-md p-4 rounded-lg">
                <img src="{{ asset('Eyes/eye1.jpg') }}" alt="Product" class="w-full rounded-lg height:40vh">
                <h3 class="text-xl font-semibold mt-4">Luxury Lipstick</h3>
                <p class="text-gray-600">A long-lasting, hydrating lipstick.</p>
                <p class="font-bold text-brown-600 mt-2">$19.99</p>
                <button class="bg-brown-600 text-white py-2 px-4 rounded-lg mt-4">Add to Cart</button>
            </div>
            <div class="bg-white shadow-md p-4 rounded-lg">
                <img src="{{ asset('Lips/Lipstick8.jpg') }}" alt="Product" class="w-full rounded-lg height:40vh">
                <h3 class="text-xl font-semibold mt-4">Luxury Lipstick</h3>
                <p class="text-gray-600">A long-lasting, hydrating lipstick.</p>
                <p class="font-bold text-brown-600 mt-2">$19.99</p>
                <button class="bg-brown-600 text-white py-2 px-4 rounded-lg mt-4">Add to Cart</button>
            </div>
            <!-- Repeat for more products -->
        </div>
    </section>

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
