<x-app-layout>
<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">

    <div class="mx-auto max-w-4xl">

        <!-- Header -->
        <div class="mb-8 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 rounded-2xl mb-4 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
            <h1 class="text-4xl font-bold text-gray-900 mb-3">Book Your Perfect Car</h1>
            <p class="text-lg text-gray-600">
                Choose your rental dates and discover available vehicles
            </p>
        </div>

        <!-- Progress Indicator -->
        <div class="mb-8">
            <div class="flex items-center justify-center gap-4">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-semibold shadow-md">
                        1
                    </div>
                    <span class="text-sm font-semibold text-gray-900">Select Dates</span>
                </div>
                <div class="w-12 h-0.5 bg-gray-300"></div>
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center text-sm font-semibold">
                        2
                    </div>
                    <span class="text-sm font-medium text-gray-500">Choose Car</span>
                </div>
                <div class="w-12 h-0.5 bg-gray-300"></div>
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center text-sm font-semibold">
                        3
                    </div>
                    <span class="text-sm font-medium text-gray-500">Confirm</span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-12 h-0.5 bg-gray-300"></div>
                    <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center text-sm font-semibold">
                        4
                    </div>
                    <span class="text-sm font-medium text-gray-500">Payment</span>
                </div>
            </div>
        </div>

        <!-- Date Selection Card -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
            <!-- Card Header -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-8 py-6">
                <h2 class="text-2xl font-bold text-white flex items-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Select Your Rental Period
                </h2>
                <p class="text-blue-100 mt-1">Choose your pickup and return dates</p>
            </div>

            <!-- Card Body -->
            <div class="p-8">
                <form method="POST" action="{{ url('/booking/search') }}" x-data="{ startDate: '', endDate: '' }">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Start Date -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                <span class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Pickup Date
                                </span>
                            </label>
                            <input
                                type="date"
                                name="start_date"
                                x-model="startDate"
                                min="{{ now()->toDateString() }}"
                                required
                                class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:border-blue-600 focus:ring-2 focus:ring-blue-600/20 transition-all duration-200 text-gray-900 font-medium"
                            />
                            <p class="mt-2 text-xs text-gray-500">Select when you want to pick up the car</p>
                        </div>

                        <!-- End Date -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                <span class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                    </svg>
                                    Return Date
                                </span>
                            </label>
                            <input
                                type="date"
                                name="end_date"
                                x-model="endDate"
                                :min="startDate || '{{ now()->toDateString() }}'"
                                required
                                class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:border-blue-600 focus:ring-2 focus:ring-blue-600/20 transition-all duration-200 text-gray-900 font-medium"
                            />
                            <p class="mt-2 text-xs text-gray-500">Select when you want to return the car</p>
                        </div>
                    </div>

                    <!-- Info Box -->
                    <div class="mt-6 bg-blue-50 border border-blue-100 rounded-xl p-4">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <p class="text-sm font-semibold text-blue-900">Rental Information</p>
                                <p class="text-sm text-blue-700 mt-1">
                                    • Minimum rental period is 1 day<br>
                                    • Pickup time: 9:00 AM - 6:00 PM<br>
                                    • Same-day bookings are subject to availability
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="w-full mt-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-200 flex items-center justify-center gap-2 group"
                    >
                        <span>Search Available Cars</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- Features -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Flexible Booking</h3>
                        <p class="text-sm text-gray-600 mt-1">Free cancellation up to 24 hours before pickup</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Best Prices</h3>
                        <p class="text-sm text-gray-600 mt-1">Competitive rates with no hidden fees</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">24/7 Support</h3>
                        <p class="text-sm text-gray-600 mt-1">Customer service available anytime you need</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</x-app-layout>