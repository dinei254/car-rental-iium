<x-app-layout>
<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-3xl">

       <!-- Progress Indicator -->
<div class="mb-10">
    <div class="flex items-center justify-center">

        <!-- Step 1 -->
        <div class="flex items-center">
            <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center shadow-md">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <span class="ml-2 text-sm text-gray-500 font-medium">Select Dates</span>
        </div>

        <div class="w-12 h-0.5 bg-green-500 mx-4"></div>

        <!-- Step 2 -->
        <div class="flex items-center">
            <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center shadow-md">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <span class="ml-2 text-sm text-gray-500 font-medium">Choose Car</span>
        </div>

        <div class="w-12 h-0.5 bg-blue-600 mx-4"></div>

        <!-- Step 3 (current) -->
        <div class="flex items-center">
            <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-semibold shadow-md">
                3
            </div>
            <span class="ml-2 text-sm text-gray-900 font-semibold">Confirm</span>
        </div>

        <div class="w-12 h-0.5 bg-gray-300 mx-4"></div>

        <!-- Step 4 -->
        <div class="flex items-center">
            <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center font-semibold">
                4
            </div>
            <span class="ml-2 text-sm text-gray-500 font-medium">Payment</span>
        </div>

    </div>
</div>

        <!-- Header  -->
        <div class="mb-8 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 rounded-2xl mb-4 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h1 class="text-4xl font-bold text-gray-900 mb-2">
                Booking Confirmation
            </h1>
            <p class="text-lg text-gray-600">
                Review your booking details before confirmation
            </p>
        </div>

        <!-- Confirmation Card -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-200 overflow-hidden mb-6">

            <!-- Booking Summary -->
            <div class="p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    Booking Summary
                </h2>

                <!-- Car Details -->
                <div class="bg-blue-50 border border-blue-100 rounded-xl p-6 mb-6">
                    <div class="flex flex-col sm:flex-row items-start gap-6">

                        <!-- Image -->
                        <div class="w-full sm:w-40 h-32 bg-gray-200 rounded-xl overflow-hidden flex-shrink-0 shadow-md">
                            @if($car->image)
                                <img
                                    src="{{ asset('storage/'.$car->image) }}"
                                    alt="{{ $car->car_name }}"
                                    class="w-full h-full object-cover"
                                >
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                    </svg>
                                </div>
                            @endif
                        </div>

                        <!-- Info -->
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">
                                {{ $car->car_name }}
                            </h3>
                            <p class="text-gray-700 mb-3">
                                {{ $car->description }}
                            </p>
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                    </svg>
                                    <span class="text-gray-700"><strong>Plate:</strong> {{ $car->plate_number }}</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-gray-700"><strong>Rate:</strong> RM {{ number_format($car->price_per_day, 2) }} / day</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dates & Duration -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
                    <div class="bg-gray-50 border border-gray-200 rounded-xl p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p class="text-xs text-gray-600 font-semibold uppercase">Pickup Date</p>
                        </div>
                        <p class="text-lg font-bold text-gray-900">{{ \Carbon\Carbon::parse($start)->format('M d, Y') }}</p>
                    </div>
                    <div class="bg-gray-50 border border-gray-200 rounded-xl p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p class="text-xs text-gray-600 font-semibold uppercase">Return Date</p>
                        </div>
                        <p class="text-lg font-bold text-gray-900">{{ \Carbon\Carbon::parse($end)->format('M d, Y') }}</p>
                    </div>
                    <div class="bg-blue-50 border border-blue-200 rounded-xl p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-xs text-gray-600 font-semibold uppercase">Duration</p>
                        </div>
                        <p class="text-lg font-bold text-gray-900">
                            {{ $days }} day{{ $days > 1 ? 's' : '' }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Price Breakdown -->
            <div class="bg-gray-50 border-t border-gray-200 px-8 py-6">
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                    Price Breakdown
                </h3>

                <div class="space-y-3">
                    <div class="flex justify-between items-center">
                        <p class="text-gray-600">
                            Rental ({{ $days }} day{{ $days > 1 ? 's' : '' }} × RM {{ number_format($car->price_per_day, 2) }})
                        </p>
                        <p class="font-semibold text-gray-900">
                            RM {{ number_format($total, 2) }}
                        </p>
                    </div>

                    <div class="flex justify-between items-center">
                        <p class="text-gray-600">Insurance</p>
                        <p class="font-semibold text-gray-900">RM 0.00</p>
                    </div>

                    <div class="border-t border-gray-300 pt-4 flex justify-between items-center">
                        <p class="text-xl font-bold text-gray-900">Total Amount</p>
                        <p class="text-3xl font-bold text-blue-600">
                            RM {{ number_format($total, 2) }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Confirm Form -->
            <div class="p-8 border-t border-gray-200">
                <form method="POST" action="{{ url('/booking/store') }}">
                    @csrf

                    <input type="hidden" name="car_id" value="{{ $car->id }}">
                    <input type="hidden" name="start_date" value="{{ $start }}">
                    <input type="hidden" name="end_date" value="{{ $end }}">
                    <input type="hidden" name="total_price" value="{{ $total }}">

                    <label class="flex items-start gap-3 mb-6 cursor-pointer group">
                        <input type="checkbox" required class="mt-1 w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <span class="text-sm text-gray-700 group-hover:text-gray-900">
                            I agree to the <a href="#" class="text-blue-600 hover:underline font-semibold">rental terms and conditions</a> and confirm that all booking details are correct.
                        </span>
                    </label>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a
                            href="{{ url('/booking/search?start='.$start.'&end='.$end) }}"
                            class="flex-1 py-3.5 text-center border-2 border-gray-300 text-gray-700 rounded-xl font-semibold hover:border-gray-400 hover:bg-gray-50 transition-all flex items-center justify-center gap-2"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Back to Search
                        </a>

                        <button
                            type="submit"
                            class="flex-1 py-3.5 bg-blue-600 text-white rounded-xl font-semibold hover:bg-blue-700 transition-all shadow-lg hover:shadow-xl flex items-center justify-center gap-2 group"
                        >
                            <span>Confirm Booking</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Info Notice -->
        <div class="bg-blue-50 border-2 border-blue-200 rounded-xl p-5">
            <div class="flex items-start gap-3">
                <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div>
                    <p class="text-sm font-semibold text-blue-900 mb-1">Booking Approval Required</p>
                    <p class="text-sm text-blue-800">
                        Your booking will be marked as <strong>pending</strong> until approved by our admin team. You will receive a confirmation email once your booking is approved.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
</x-app-layout>