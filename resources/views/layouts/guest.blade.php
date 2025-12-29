<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CarRent IIUM') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-50 to-slate-100 px-4">

        <div class="w-full max-w-md">

            <!-- Logo + Brand -->
            <div class="text-center mb-8">
                <a href="/" class="inline-flex items-center gap-3">
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center shadow-md">
                        <span class="text-white font-bold text-lg">CR</span>
                    </div>
                    <span class="text-2xl font-bold text-gray-900">
                        CarRent
                    </span>
                </a>
                <p class="mt-2 text-sm text-gray-600">
                    Car rental system for IIUM students
                </p>
            </div>

            <!-- Auth Card -->
            <div class="bg-white shadow-lg rounded-2xl px-8 py-6">
                {{ $slot }}
            </div>

            <!-- Footer -->
            <p class="text-center text-xs text-gray-500 mt-6">
                © {{ date('Y') }} CarRent IIUM. All rights reserved.
            </p>
        </div>

    </div>
</body>
</html>
