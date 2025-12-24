<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100">

    <!-- Hero Section -->
    <section class="pt-20 pb-32 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-6xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <div class="space-y-6">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900">
                        Rent Cars Easily for IIUM Students
                    </h1>

                    <p class="text-xl text-gray-600">
                        Fast, affordable, and convenient car rental service exclusively for IIUM students.
                    </p>

                    <div class="flex gap-4">
                        <a href="{{ url('/booking/search') }}"
                           class="px-8 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700">
                            Book a Car
                        </a>

                        <a href="#features"
                           class="px-8 py-3 border-2 border-gray-300 text-gray-700 rounded-lg font-semibold hover:border-blue-600 hover:text-blue-600">
                            Learn More
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="mx-auto max-w-6xl text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Why Choose CarRent?
            </h2>
            <p class="text-xl text-gray-600 mb-16">
                Tailored for IIUM students
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-slate-50 rounded-2xl p-8">
                    <h3 class="text-xl font-bold mb-2">Easy Booking</h3>
                    <p class="text-gray-600">Book in minutes, no hassle.</p>
                </div>

                <div class="bg-slate-50 rounded-2xl p-8">
                    <h3 class="text-xl font-bold mb-2">Affordable Prices</h3>
                    <p class="text-gray-600">Student-friendly rates.</p>
                </div>

                <div class="bg-slate-50 rounded-2xl p-8">
                    <h3 class="text-xl font-bold mb-2">Safe & Verified</h3>
                    <p class="text-gray-600">Verified cars only.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cars Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-slate-50">
        <div class="mx-auto max-w-6xl text-center">
            <h2 class="text-3xl font-bold mb-6">Our Fleet</h2>

            <a href="{{ url('/booking/search') }}"
               class="inline-block px-8 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700">
                View Available Cars
            </a>
        </div>
    </section>

</div>
</x-app-layout>
