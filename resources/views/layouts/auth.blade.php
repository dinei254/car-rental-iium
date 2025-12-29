<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CarRent') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(30px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        .animate-slide-in {
            animation: slideIn 0.8s ease-out forwards;
        }
        .animate-slide-in-right {
            animation: slideInRight 0.8s ease-out forwards;
        }
        .gradient-overlay {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(147, 51, 234, 0.1) 100%);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        /* Slideshow Styles */
        .slide {
            display: none;
            animation: fadeIn 0.5s ease-in-out;
        }
        .slide.active {
            display: block;
        }
        .dot.active {
            background: white !important;
            width: 1.5rem;
        }
    </style>
</head>
<body class="font-sans antialiased">

<div class="min-h-screen relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50"></div>
    
    <!-- Floating Orbs -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float"></div>
    <div class="absolute top-40 right-10 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float" style="animation-delay: 2s;"></div>
    <div class="absolute -bottom-20 left-1/3 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float" style="animation-delay: 4s;"></div>

    <!-- Main Content -->
    <div class="relative min-h-screen flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-6xl grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- LEFT: Car Image & Features -->
            <div class="hidden lg:flex flex-col items-center justify-center space-y-8 animate-slide-in">
                
                <!-- Car Slideshow -->
                <div class="relative max-w-lg w-full">
                    <div class="relative overflow-hidden rounded-3xl shadow-2xl">
                        
                        <!-- Slides Container -->
                        <div id="carSlider" class="relative">
                            <!-- Slide 1 -->
                            <div class="slide active">
                                <img
                                    src="https://images.pexels.com/photos/244206/pexels-photo-244206.jpeg?cs=srgb&dl=pexels-mikebirdy-244206.jpg&fm=jpg"
                                    alt="Modern Car"
                                    class="w-full h-80 object-cover"
                                >
                            </div>
                            <!-- Slide 2 -->
                            <div class="slide">
                                <img
                                    src="https://images.pexels.com/photos/170811/pexels-photo-170811.jpeg?auto=compress&cs=tinysrgb&w=1260"
                                    alt="Sports Car"
                                    class="w-full h-80 object-cover"
                                >
                            </div>
                            <!-- Slide 3 -->
                            <div class="slide">
                                <img
                                    src="https://images.pexels.com/photos/1280560/pexels-photo-1280560.jpeg?auto=compress&cs=tinysrgb&w=1260"
                                    alt="Luxury Car"
                                    class="w-full h-80 object-cover"
                                >
                            </div>
                            <!-- Slide 4 -->
                            <div class="slide">
                                <img
                                    src="https://images.pexels.com/photos/1592384/pexels-photo-1592384.jpeg?auto=compress&cs=tinysrgb&w=1260"
                                    alt="SUV Car"
                                    class="w-full h-80 object-cover"
                                >
                            </div>
                        </div>

                        <!-- Dots Indicator -->
                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 z-20 flex gap-2">
                            <button onclick="goToSlide(0)" class="dot w-2.5 h-2.5 rounded-full bg-white/60 hover:bg-white transition-all"></button>
                            <button onclick="goToSlide(1)" class="dot w-2.5 h-2.5 rounded-full bg-white/60 hover:bg-white transition-all"></button>
                            <button onclick="goToSlide(2)" class="dot w-2.5 h-2.5 rounded-full bg-white/60 hover:bg-white transition-all"></button>
                            <button onclick="goToSlide(3)" class="dot w-2.5 h-2.5 rounded-full bg-white/60 hover:bg-white transition-all"></button>
                        </div>
                    </div>
                </div>

                <!-- Feature List -->
                <div class="w-full max-w-lg space-y-4">
                    <div class="flex items-start gap-4 bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-md">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Easy Booking</h3>
                            <p class="text-sm text-gray-600">Reserve your car in just a few clicks</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-md">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Student-Friendly Rates</h3>
                            <p class="text-sm text-gray-600">Affordable pricing designed for students</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl flex items-center justify-center shadow-md">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Safe & Secure</h3>
                            <p class="text-sm text-gray-600">Your data and transactions are protected</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Auth Content -->
            <div class="flex justify-center animate-slide-in-right">
                <div class="w-full max-w-md">
                    
                    <!-- Logo Section (Always Visible) -->
                    <div class="text-center mb-8">
                        <div class="inline-flex items-center gap-3 mb-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                                </svg>
                            </div>
                            <div class="text-left">
                                <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">
                                    CarRent
                                </h1>
                                <p class="text-xs text-gray-600 font-medium">IIUM Campus</p>
                            </div>
                        </div>
                    </div>

                    <!-- Auth Card -->
                    <div class="glass-card rounded-3xl shadow-2xl p-8 hover:shadow-3xl transition-shadow duration-300">
                        @yield('content')
                    </div>

                    <!-- Footer -->
                    <p class="text-center text-xs text-gray-500 mt-6">
                        © {{ date('Y') }} CarRent IIUM. All rights reserved.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');

    function showSlide(n) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        if (n >= slides.length) currentSlide = 0;
        if (n < 0) currentSlide = slides.length - 1;
        
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
    }

    function changeSlide(n) {
        currentSlide += n;
        showSlide(currentSlide);
    }

    function goToSlide(n) {
        currentSlide = n;
        showSlide(currentSlide);
    }

    // Auto-advance slides every 3 seconds
    setInterval(() => {
        currentSlide++;
        showSlide(currentSlide);
    }, 3000);

    // Initialize first slide
    showSlide(0);
</script>

</body>
</html>