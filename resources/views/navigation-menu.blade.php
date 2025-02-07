<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('Custom.css') }}">

        <title>Welcome</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])


    </head>
    <body>
    <header class="fixed top-0 left-0 w-full shadow-md py-4 header-bg h-20 z-20">
    <div class="container mx-auto flex justify-between items-center px-6">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-2xl font-bold text-white">
           GOLDEN GLOW
    <header class=" shadow-md py-4" style='background-color:rgb(104, 64, 64)'>
    <div class="container mx-auto flex justify-between items-center px-6">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-2xl font-bold text-white">
           GOLDEN GLOW
        </a>

        <!-- Navigation Links -->
        <nav class="hidden md:flex space-x-6">
            <a href="{{ url('/') }}" class="text-white hover:text-pink-500 transition">SHOP ALL</a>
            <a href="{{ url('/shop') }}" class="text-white hover:text-pink-500 transition">FACE</a>
            <a href="{{ url('/about') }}" class="text-white hover:text-pink-500 transition">LIPS</a>
            <a href="{{ url('/contact') }}" class="text-white hover:text-pink-500 transition">EYES</a>
            <a href="{{ url('/contact') }}" class="text-white hover:text-pink-500 transition">ACCESSORIES</a>
        </nav>

             <!-- Login & sign up -->
             <div class=" flex items- center space-x-4">
                <a href="{{ url('/login') }}" class="text-white hover:text-pink-500 transition">Login</a>
            <a href="{{ url('/register') }}" class="text-white hover:text-pink-500 transition">Sign Up</a>

             </div>

        <!-- Shopping Cart & Mobile Menu -->
        <div class="flex items-center space-x-4">
            <a href="{{ url('/cart') }}" class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-pink-500 transition" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 3h2l3.6 7.59M7 16h12l3-8H6" />
                    <circle cx="10" cy="21" r="1" />
                    <circle cx="17" cy="21" r="1" />
                </svg>
            </a>

        </nav>

        <!-- Shopping Cart & Mobile Menu -->
        <div class="flex items-center space-x-4">
            <a href="{{ url('/cart') }}" class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-pink-500 transition" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 3h2l3.6 7.59M7 16h12l3-8H6" />
                    <circle cx="10" cy="21" r="1" />
                    <circle cx="17" cy="21" r="1" />
                </svg>
            </a>

            <!-- Mobile Menu Button -->
            <button id="menu-toggle" class="md:hidden text-white hover:text-pink-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
        <a href="{{ url('/') }}" class="block px-6 py-2 text-gray-700 hover:text-pink-500">Home</a>
        <a href="{{ url('/shop') }}" class="block px-6 py-2 text-gray-700 hover:text-pink-500">Shop</a>
        <a href="{{ url('/about') }}" class="block px-6 py-2 text-gray-700 hover:text-pink-500">About</a>
        <a href="{{ url('/contact') }}" class="block px-6 py-2 text-gray-700 hover:text-pink-500">Contact</a>
    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</header>

</body>
</html>
