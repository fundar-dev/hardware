<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HardwareHub') }}</title>

    <!-- Tailwind CDN (match landing page) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>

<body class="font-sans text-gray-900">

<div class="min-h-screen flex">

    <!-- LEFT SIDE (Branding / Info) -->
    <div class="hidden lg:flex w-1/2 bg-orange-600 text-white flex-col justify-center items-center p-12">

        <h1 class="text-4xl font-bold mb-4">HardwareHub</h1>

        <p class="text-center max-w-md mb-6">
            Compare hardware prices from multiple stores in Victorias City.
            Discover the best deals and trusted products in one place.
        </p>

        <div class="space-y-2 text-sm">
            <p>🏪 Multi-store platform</p>
            <p>🔍 Product comparison</p>
            <p>⭐ Ratings & reviews</p>
        </div>

        <a href="/" class="mt-6 underline">← Back to Home</a>
    </div>

    <!-- RIGHT SIDE (FORM) -->
    <div class="flex w-full lg:w-1/2 justify-center items-center bg-gray-50 p-6">

        <div class="w-full max-w-md">

            <!-- Logo / Title -->
            <div class="text-center mb-6">
                <a href="/" class="text-2xl font-bold text-orange-600">
                    HardwareHub
                </a>
                <p class="text-sm text-gray-500">
                    Victorias City Hardware Marketplace
                </p>
            </div>

            <!-- FORM CARD -->
            <div class="bg-white shadow-md rounded-lg p-6">
                {{ $slot }}
            </div>

        </div>
    </div>

</div>

</body>
</html>
