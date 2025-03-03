<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('Custom.css') }}">



@include('navigation-menu')


<body class="pt-20">
    <!-- Hero Section -->
    <section class="relative section-bg bg-no-repeat bg-right md:bg-[length:50%_auto] sm:bg-none"
    style="background-image: url('{{ asset('beauty.jpg') }}'); height: 50vh;">
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="absolute sm:left-0 md:left-10 top-1/2 transform -translate-y-1/2 text-left text-white px-6 max-w-[600px] sm:text-center md:text-left">
            <h2 class="text-xl text-1g pt-10 mb-4">NEW RELEASE</h2>
            <h2 class="text-5xl text-1g font-semibold pt-10 mb-4">Radiate Confidence with Golden Glow</h2>
            <p class="text-lg pt-10 mb-6">Discover beauty products that enhance your natural glow.</p>
            <a href="#" class="py-3 px-6 rounded-full shadow-md bg-white text-lg text-black">Shop Now</a>
        </div>
    </div>
</section>

    <!-- Featured Products -->
    <section class="pt-24 container mx-auto px-6 mt-20">
    <h2 class="text-2xl font-light text-center text-gray-800">MUST HAVES</h2>
    <i><h2 class="text-4xl font-semibold italic text-center text-gray-800 mb-8">Best Sellers</h2></i>
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

            <div class="bg-white shadow-md p-4 rounded-lg add-to-cart">
                <img src="{{ asset('Eyes/eye1.jpg') }}" alt="Product" class="w-full rounded-lg height:40vh">
                <h3 class="text-xl font-semibold mt-4">Luxury Lipstick</h3>
                <p class="text-gray-600">A long-lasting, hydrating lipstick.</p>
                <p class="font-bold text-brown-600 mt-2">$19.99</p>
                <button class="text-center flex justify-center text-white py-2 px-4 rounded-lg mt-4 rounded-full header-bg"
                 data-name="Luxury Lipstick"
                data-price="19.99">Add to Cart</button>
        
            <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize an empty cart array from localStorage or create a new one
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

 
        function addToCart(event) {
            let button = event.target; // Get the clicked button
            let productName = button.getAttribute("data-name");
            let productPrice = parseFloat(button.getAttribute("data-price"));

            if (!productName || isNaN(productPrice)) {
                alert("Error: Product data is missing or incorrect!");
                return;
            }

            // Create product object
            let product = { name: productName, price: productPrice, quantity: 1 };

            // Check if product already exists in cart
            let existingProduct = cart.find(item => item.name === productName);
            if (existingProduct) {
                existingProduct.quantity += 1;
            } else {
                cart.push(product);
            }

            // Save updated cart to localStorage
            localStorage.setItem('cart', JSON.stringify(cart));

            // Redirect user to cart page after adding item
            window.location.href = "/cart"; // Change this to your actual cart page URL
        }

        // Attach event listeners to all "Add to Cart" buttons
        document.querySelectorAll(".add-to-cart").forEach(button => {
            button.addEventListener("click", addToCart);
        });
    });
</script>
</div>
<div class="bg-white shadow-md p-4 rounded-lg">
<img src="{{ asset('Lips/Lipstick8.jpg') }}" alt="Product" class="w-full rounded-lg height:40vh">
    

        </div>
</div>
        <section class="pt-20 container mx-auto px-6 mt-20 flex justify-center">
    <button class="rounded-full mx-auto text-center justify-self-center shadow-md text-white text-lg px-6 py-3 header-bg">
        VIEW ALL PRODUCTS
    </button>
</section>

    </section>

    <!-- Footer -->
     
  

</body>
</html>