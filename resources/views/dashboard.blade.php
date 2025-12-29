<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-slate-100">

    <!-- Hero Section -->
    <section class="pt-20 pb-32 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div class="space-y-8">
                    <div class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold">
                        🎓 Exclusively for IIUM Students
                    </div>
                    
                    <h1 class="text-5xl md:text-6xl font-bold text-gray-900 leading-tight">
                        Rent Cars Easily 
                        <span class="text-blue-600">Anytime, Anywhere</span>
                    </h1>

                    <p class="text-xl text-gray-600 leading-relaxed">
                        Fast, affordable, and convenient car rental service designed exclusively for IIUM students. Get on the road in minutes!
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="{{ url('/booking/search') }}"
                           class="px-8 py-4 bg-blue-600 text-white rounded-xl font-semibold hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
                            Book a Car Now →
                        </a>

                        <a href="#features"
                           class="px-8 py-4 bg-white border-2 border-gray-300 text-gray-700 rounded-xl font-semibold hover:border-blue-600 hover:text-blue-600 transform hover:scale-105 transition-all duration-200">
                            Learn More
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="flex flex-wrap gap-8 pt-8 border-t border-gray-200">
                        <div>
                            <div class="text-3xl font-bold text-blue-600">100+</div>
                            <div class="text-sm text-gray-600">Happy Students</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-blue-600">20+</div>
                            <div class="text-sm text-gray-600">Cars Available</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-blue-600">24/7</div>
                            <div class="text-sm text-gray-600">Support</div>
                        </div>
                    </div>
                </div>

                <!-- Hero Image/Illustration -->
                <div class="relative">
                    <div class="relative z-10 rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://images.pexels.com/photos/170811/pexels-photo-170811.jpeg?cs=srgb&dl=road-car-vehicle-170811.jpg&fm=jpg" alt="Car" class="w-full h-auto">
                    </div>
                    
                    <!-- Floating badges -->
                    <div class="absolute top-8 -left-6 bg-white rounded-2xl shadow-xl p-4 z-20 floating-badge">
                        <div class="text-3xl mb-1">🚗</div>
                        <div class="text-xs font-semibold text-gray-700 whitespace-nowrap">Easy Booking</div>
                    </div>
                    
                    <div class="absolute bottom-8 -right-6 bg-white rounded-2xl shadow-xl p-4 z-20 floating-badge">
                        <div class="text-3xl mb-1">💰</div>
                        <div class="text-xs font-semibold text-gray-700 whitespace-nowrap">Best Prices</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="mx-auto max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Why Choose CarRent IIUM?
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    We understand student needs and provide the best car rental experience tailored just for you
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="group bg-gradient-to-br from-blue-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-blue-100 hover:border-blue-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-900">Easy Booking</h3>
                    <p class="text-gray-600 leading-relaxed">Book your perfect ride in minutes with our streamlined process. No complicated forms or lengthy procedures.</p>
                </div>

                <!-- Feature 2 -->
                <div class="group bg-gradient-to-br from-purple-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-purple-100 hover:border-purple-300">
                    <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-900">Affordable Prices</h3>
                    <p class="text-gray-600 leading-relaxed">Student-friendly rates that won't break the bank. Special discounts and flexible payment options available.</p>
                </div>

                <!-- Feature 3 -->
                <div class="group bg-gradient-to-br from-green-50 to-white rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border border-green-100 hover:border-green-300">
                    <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-900">Safe & Verified</h3>
                    <p class="text-gray-600 leading-relaxed">All cars are regularly inspected and maintained. Drive with confidence knowing you're in safe hands.</p>
                </div>
            </div>

            <!-- Additional Benefits -->
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center p-6 bg-slate-50 rounded-2xl">
                    <div class="text-3xl mb-2">⚡</div>
                    <div class="font-semibold text-gray-900">Instant Approval</div>
                </div>
                <div class="text-center p-6 bg-slate-50 rounded-2xl">
                    <div class="text-3xl mb-2">📱</div>
                    <div class="font-semibold text-gray-900">Mobile Friendly</div>
                </div>
                <div class="text-center p-6 bg-slate-50 rounded-2xl">
                    <div class="text-3xl mb-2">🔒</div>
                    <div class="font-semibold text-gray-900">Secure Payment</div>
                </div>
                <div class="text-center p-6 bg-slate-50 rounded-2xl">
                    <div class="text-3xl mb-2">💬</div>
                    <div class="font-semibold text-gray-900">24/7 Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="mx-auto max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    How It Works
                </h2>
                <p class="text-xl text-gray-600">
                    Get on the road in 3 simple steps
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="relative">
                    <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mb-6">1</div>
                        <h3 class="text-xl font-bold mb-3">Choose Your Car</h3>
                        <p class="text-gray-600">Browse our fleet and select the perfect car for your needs</p>
                    </div>
                    <div class="hidden md:block absolute top-1/2 -right-4 text-4xl text-blue-300">→</div>
                </div>

                <div class="relative">
                    <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-12 h-12 bg-purple-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mb-6">2</div>
                        <h3 class="text-xl font-bold mb-3">Book & Pay</h3>
                        <p class="text-gray-600">Complete your booking with secure payment options</p>
                    </div>
                    <div class="hidden md:block absolute top-1/2 -right-4 text-4xl text-purple-300">→</div>
                </div>

                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-green-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mb-6">3</div>
                    <h3 class="text-xl font-bold mb-3">Start Driving</h3>
                    <p class="text-gray-600">Pick up your car and enjoy your journey</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cars CTA Section -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-gradient-to-r from-blue-600 to-purple-600">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Ready to Hit the Road?
            </h2>
            <p class="text-xl text-blue-100 mb-8">
                Browse our fleet of well-maintained vehicles and book your ride today
            </p>

            <a href="{{ url('/booking/search') }}"
               class="inline-block px-10 py-4 bg-white text-blue-600 rounded-xl font-bold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-200 shadow-2xl">
                View Available Cars →
            </a>
        </div>
    </section>

</div>

<style>
@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.floating-badge {
    animation: bounce 3s infinite ease-in-out;
}
</style>
</x-app-layout>