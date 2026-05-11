<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HardwareHub Victorias</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        :root {
            --or: #E07A20;
            --tl: #1D9E75;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

<!-- NAVBAR -->
<header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <h1 class="text-2xl font-bold text-orange-600">
            Hardware<span class="text-teal-600">Hub</span>
        </h1>

        <nav class="flex items-center gap-4 text-sm">

            <a href="#" class="hover:text-orange-600">
                Browse
            </a>

            <a href="#" class="hover:text-orange-600">
                Shops
            </a>

            @auth
                <a href="{{ url('/dashboard') }}"
                   class="bg-orange-600 text-white px-4 py-2 rounded-lg">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="border px-4 py-2 rounded-lg">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   class="bg-orange-600 text-white px-4 py-2 rounded-lg">
                    Register
                </a>
            @endauth

        </nav>
    </div>
</header>

<!-- HERO -->
<section class="bg-gradient-to-r from-orange-600 to-orange-700 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20">

        <div class="max-w-3xl">
            <h2 class="text-5xl font-bold leading-tight mb-5">
                Your Local Hardware Stores, Online
            </h2>

            <p class="text-lg text-orange-100 mb-8">
                Browse, compare, and order products from trusted hardware
                stores across Victorias City.
            </p>

            <!-- SEARCH -->
            <div class="bg-white p-2 rounded-xl flex gap-2 shadow-lg">

                <input
                    type="text"
                    placeholder="Search cement, paint, tools..."
                    class="flex-1 px-4 py-3 rounded-lg outline-none text-gray-700"
                >

                <button class="bg-teal-600 hover:bg-teal-700 px-6 py-3 rounded-lg font-semibold">
                    Search
                </button>

            </div>

            <!-- CTA -->
            <div class="mt-6 flex gap-4">

                <a href="#"
                   class="bg-white text-orange-600 px-6 py-3 rounded-lg font-semibold">
                    Browse Products
                </a>

                <a href="#"
                   class="border border-white px-6 py-3 rounded-lg font-semibold">
                    Register Your Store
                </a>

            </div>
        </div>

    </div>
</section>

<!-- CATEGORIES -->
<section class="py-14 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold">
                Browse Categories
            </h2>

            <a href="#" class="text-teal-600 font-medium">
                View All
            </a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-5">

            <div class="bg-orange-50 border border-orange-100 rounded-xl p-6 text-center hover:bg-orange-600 hover:text-white transition cursor-pointer">
                <div class="text-4xl mb-3">🏗️</div>
                <p class="font-medium">Cement</p>
            </div>

            <div class="bg-orange-50 border border-orange-100 rounded-xl p-6 text-center hover:bg-orange-600 hover:text-white transition cursor-pointer">
                <div class="text-4xl mb-3">🎨</div>
                <p class="font-medium">Paint</p>
            </div>

            <div class="bg-orange-50 border border-orange-100 rounded-xl p-6 text-center hover:bg-orange-600 hover:text-white transition cursor-pointer">
                <div class="text-4xl mb-3">🛠️</div>
                <p class="font-medium">Tools</p>
            </div>

            <div class="bg-orange-50 border border-orange-100 rounded-xl p-6 text-center hover:bg-orange-600 hover:text-white transition cursor-pointer">
                <div class="text-4xl mb-3">⚡</div>
                <p class="font-medium">Electrical</p>
            </div>

            <div class="bg-orange-50 border border-orange-100 rounded-xl p-6 text-center hover:bg-orange-600 hover:text-white transition cursor-pointer">
                <div class="text-4xl mb-3">🚰</div>
                <p class="font-medium">Plumbing</p>
            </div>

        </div>

    </div>

</section>

<!-- FEATURED SHOPS -->
<section class="py-14">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold">
                Featured Shops
            </h2>

            <a href="#" class="text-teal-600 font-medium">
                See All
            </a>
        </div>

        <div class="grid md:grid-cols-2 gap-6">

            <!-- SHOP -->
            <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-md transition">

                <div class="flex justify-between items-start mb-4">

                    <div>
                        <h3 class="text-xl font-semibold">
                            Santos Hardware
                        </h3>

                        <p class="text-sm text-gray-500">
                            Victorias City
                        </p>
                    </div>

                    <span class="bg-teal-100 text-teal-700 px-3 py-1 rounded-full text-xs">
                        Approved
                    </span>

                </div>

                <div class="flex items-center justify-between">

                    <div class="text-orange-500">
                        ★★★★☆
                    </div>

                    <a href="#"
                       class="text-sm text-teal-600 font-medium">
                        Visit Shop →
                    </a>

                </div>

            </div>

            <!-- SHOP -->
            <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-md transition">

                <div class="flex justify-between items-start mb-4">

                    <div>
                        <h3 class="text-xl font-semibold">
                            Cruz Construction Supply
                        </h3>

                        <p class="text-sm text-gray-500">
                            Victorias City
                        </p>
                    </div>

                    <span class="bg-teal-100 text-teal-700 px-3 py-1 rounded-full text-xs">
                        Approved
                    </span>

                </div>

                <div class="flex items-center justify-between">

                    <div class="text-orange-500">
                        ★★★★★
                    </div>

                    <a href="#"
                       class="text-sm text-teal-600 font-medium">
                        Visit Shop →
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- POPULAR PRODUCTS -->
<section class="py-14 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold">
                Popular Products
            </h2>

            <a href="#" class="text-teal-600 font-medium">
                View All
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-6">

            <!-- PRODUCT -->
            <div class="bg-white border rounded-2xl overflow-hidden hover:shadow-md transition">

                <div class="h-48 bg-gray-100 flex items-center justify-center text-6xl">
                    📦
                </div>

                <div class="p-5">

                    <h3 class="font-semibold mb-2">
                        Portland Cement 40kg
                    </h3>

                    <p class="text-orange-600 font-bold text-lg mb-2">
                        ₱285.00
                    </p>

                    <p class="text-sm text-gray-500 mb-4">
                        Santos Hardware
                    </p>

                    <button class="w-full bg-orange-600 text-white py-3 rounded-lg hover:bg-orange-700">
                        Add to Cart
                    </button>

                </div>

            </div>

            <!-- PRODUCT -->
            <div class="bg-white border rounded-2xl overflow-hidden hover:shadow-md transition">

                <div class="h-48 bg-gray-100 flex items-center justify-center text-6xl">
                    🛠️
                </div>

                <div class="p-5">

                    <h3 class="font-semibold mb-2">
                        Screwdriver Set
                    </h3>

                    <p class="text-orange-600 font-bold text-lg mb-2">
                        ₱149.00
                    </p>

                    <p class="text-sm text-gray-500 mb-4">
                        Cruz Construction
                    </p>

                    <button class="w-full bg-orange-600 text-white py-3 rounded-lg hover:bg-orange-700">
                        Add to Cart
                    </button>

                </div>

            </div>

            <!-- PRODUCT -->
            <div class="bg-white border rounded-2xl overflow-hidden hover:shadow-md transition">

                <div class="h-48 bg-gray-100 flex items-center justify-center text-6xl">
                    🚰
                </div>

                <div class="p-5">

                    <h3 class="font-semibold mb-2">
                        PVC Pipe 2in x 6ft
                    </h3>

                    <p class="text-orange-600 font-bold text-lg mb-2">
                        ₱75.00
                    </p>

                    <p class="text-sm text-gray-500 mb-4">
                        Santos Hardware
                    </p>

                    <button class="w-full bg-orange-600 text-white py-3 rounded-lg hover:bg-orange-700">
                        Add to Cart
                    </button>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- STORE OWNER CTA -->
<section class="py-20 bg-gray-100">

    <div class="max-w-4xl mx-auto text-center px-6">

        <h2 class="text-4xl font-bold mb-4">
            Own a Hardware Store?
        </h2>

        <p class="text-gray-600 mb-8">
            Join HardwareHub and start selling your products online
            to customers across Victorias City.
        </p>

        <a href="#"
           class="bg-orange-600 text-white px-8 py-4 rounded-xl inline-block font-semibold">
            Register as Shop Owner
        </a>

    </div>

</section>

<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-300 py-6 text-center">

    <p>
        &copy; {{ date('Y') }} HardwareHub Victorias.
        All rights reserved.
    </p>

</footer>

</body>
</html>
