<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HardwareHub Victorias</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- NAVBAR -->
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-orange-600">HardwareHub</h1>

        <nav class="space-x-4">
            <a href="#" class="hover:text-orange-600">Home</a>
            <a href="#" class="hover:text-orange-600">Browse Products</a>
            <a href="#" class="hover:text-orange-600">Shops</a>

            @auth
                <a href="{{ url('/dashboard') }}" class="bg-orange-600 text-white px-4 py-1 rounded">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="border px-4 py-1 rounded">Login</a>
                <a href="{{ route('register') }}" class="bg-orange-600 text-white px-4 py-1 rounded">Register</a>
            @endauth
        </nav>
    </div>
</header>

<!-- HERO -->
<section class="bg-orange-600 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20 text-center">
        <h2 class="text-4xl font-bold mb-4">
            Compare Hardware Prices Across Victorias City
        </h2>
        <p class="mb-6">
            Discover products from multiple local hardware stores, compare prices, and choose the best deals—all in one place.
        </p>

        <div class="flex justify-center gap-4">
            <a href="#" class="bg-white text-orange-600 px-6 py-3 rounded font-semibold">
                Browse Products
            </a>
            <a href="#" class="border border-white px-6 py-3 rounded font-semibold">
                Register Your Store
            </a>
        </div>
    </div>
</section>

<!-- OBJECTIVES / FEATURES -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-2xl font-bold mb-10">What You Can Do</h2>

        <div class="grid md:grid-cols-3 gap-8">

            <!-- Multi Vendor -->
            <div class="p-6 border rounded shadow-sm">
                <h3 class="text-xl font-semibold mb-2">🏪 Multi-Store Platform</h3>
                <p>
                    Hardware stores can register, manage products, and reach more customers online.
                </p>
            </div>

            <!-- Comparison -->
            <div class="p-6 border rounded shadow-sm">
                <h3 class="text-xl font-semibold mb-2">🔍 Compare Products</h3>
                <p>
                    Easily compare prices and availability from different shops before buying.
                </p>
            </div>

            <!-- Reviews -->
            <div class="p-6 border rounded shadow-sm">
                <h3 class="text-xl font-semibold mb-2">⭐ Ratings & Reviews</h3>
                <p>
                    See customer feedback to help you choose quality products with confidence.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- SAMPLE COMPARISON -->
<section class="py-16">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-2xl font-bold mb-8 text-center">Example Product Comparison</h2>

        <div class="overflow-x-auto">
            <table class="w-full border">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-3 text-left">Product</th>
                        <th class="p-3">Store</th>
                        <th class="p-3">Price</th>
                        <th class="p-3">Rating</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="p-3">Cement (40kg)</td>
                        <td class="p-3">ABC Hardware</td>
                        <td class="p-3 text-orange-600 font-bold">₱280</td>
                        <td class="p-3">⭐⭐⭐⭐☆</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-3">Cement (40kg)</td>
                        <td class="p-3">XYZ Builders</td>
                        <td class="p-3 text-orange-600 font-bold">₱270</td>
                        <td class="p-3">⭐⭐⭐⭐⭐</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- FOR STORE OWNERS -->
<section class="bg-gray-100 py-16">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-2xl font-bold mb-4">Own a Hardware Store?</h2>
        <p class="mb-6">
            Join our platform and start selling your products online to customers across Victorias City.
        </p>
        <a href="#" class="bg-orange-600 text-white px-6 py-3 rounded">
            Register as Shop Owner
        </a>
    </div>
</section>

<!-- LOCATION -->
<section class="py-16">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-2xl font-bold mb-4">Serving Victorias City</h2>
        <p>
            Connecting local hardware stores and customers in Victorias City, Negros Occidental.
        </p>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-gray-800 text-white text-center py-4">
    <p>&copy; {{ date('Y') }} HardwareHub Victorias. All rights reserved.</p>
</footer>

</body>
</html>
