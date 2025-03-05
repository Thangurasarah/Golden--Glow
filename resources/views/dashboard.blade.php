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

<body class="pt-20">
    @vite(['resources/js/app.js'])
    @include('navigation-menu')

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

        <div id="product-list" class="grid grid-cols-1 md:grid-cols-3 gap-6"></div> <!-- This is where products will be inserted -->
    </section>

    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const products = [
                { name: "Luxury Lipstick", price: 19.99, image: "{{ asset('Lips/Lipstick1.jpg') }}" },
                { name: "Elegant Necklace", price: 29.99, image: "{{ asset('accessories/accessories2.jpg') }}" },
                { name: "Face Glow Cream", price: 24.99, image: "{{ asset('Face/face1.jpg') }}" },
                { name: "Golden Earrings", price: 15.99, image: "{{ asset('accessories/Earing1.jpg') }}" },
                { name: "Smokey Eye Palette", price: 22.99, image: "{{ asset('Eyes/eye1.jpg') }}" },
                { name: "Matte Lipstick", price: 18.99, image: "{{ asset('Lips/Lipstick8.jpg') }}" }
            ];

            function loadProducts() {
                const productList = document.getElementById("product-list");
                productList.innerHTML = "";

                products.forEach(product => {
                    productList.innerHTML += `
                        <div class="bg-white shadow-md p-4 rounded-2g">
                            <img src="${product.image}" alt="${product.name}" class="w-full rounded-lg h-40 object-cover">
                            <h3 class="text-xl font-semibold mt-4">${product.name}</h3>
                            <p class="text-gray-600">A high-quality, long-lasting product.</p>
                            <p class="font-bold text-brown-600 mt-2">$${product.price.toFixed(2)}</p>
                            <button class="button-bg  text-white py-2 px-4 rounded-lg mt-4 add-to-cart block mx-auto"
                                data-name="${product.name}"
                                data-price="${product.price}"
                                data-image="${product.image}">
                                Add to Cart
                            </button>
                        </div>
                    `;
                });
            }

            loadProducts();
        });
    </script>
    <section class="pt-20 container mx-auto px-6 mt-20 flex justify-center">
        <button class="rounded-full mx-auto text-center justify-self-center shadow-md text-white text-lg px-6 py-3 header-bg">
            VIEW ALL PRODUCTS
        </button>
    </section>

</body>
</html>
