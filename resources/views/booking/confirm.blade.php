<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl">

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">
                Booking Confirmation
            </h1>
            <p class="text-xl text-gray-600">
                Review your booking details before confirmation
            </p>
        </div>

        <!-- Confirmation Card -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">

            <!-- Booking Summary -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    Booking Summary
                </h2>

                <!-- Car Details -->
                <div class="bg-gradient-to-br from-blue-50 to-slate-50 rounded-xl p-6 mb-6">
                    <div class="flex items-start gap-6">

                        <!-- Image -->
                        <div class="w-32 h-24 bg-gray-200 rounded-lg flex items-center justify-center flex-shrink-0">
                            @if($car->image)
                                <img
                                    src="{{ asset('storage/'.$car->image) }}"
                                    class="w-full h-full object-cover rounded-lg"
                                >
                            @endif
                        </div>

                        <!-- Info -->
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-gray-900">
                                {{ $car->car_name }}
                            </h3>
                            <p class="text-gray-600 mb-2">
                                {{ $car->description }}
                            </p>
                            <div class="space-y-1 text-sm text-gray-600">
                                <p><strong>Plate Number:</strong> {{ $car->plate_number }}</p>
                                <p><strong>Rate:</strong> RM {{ $car->price_per_day }} / day</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dates -->
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <p class="text-sm text-gray-600 font-semibold mb-1">Start Date</p>
                        <p class="text-lg font-bold text-gray-900">{{ $start }}</p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <p class="text-sm text-gray-600 font-semibold mb-1">End Date</p>
                        <p class="text-lg font-bold text-gray-900">{{ $end }}</p>
                    </div>
                </div>

                <!-- Duration -->
                <div class="bg-gray-50 rounded-lg p-4 mb-6">
                    <p class="text-sm text-gray-600 font-semibold mb-1">Duration</p>
                    <p class="text-lg font-bold text-gray-900">
                        {{ $days }} day{{ $days > 1 ? 's' : '' }}
                    </p>
                </div>
            </div>

            <!-- Price Breakdown -->
            <div class="border-t border-gray-200 pt-6 mb-8">
                <h3 class="text-lg font-bold text-gray-900 mb-4">
                    Price Breakdown
                </h3>

                <div class="space-y-3">
                    <div class="flex justify-between">
                        <p class="text-gray-600">
                            Rental ({{ $days }} × RM {{ $car->price_per_day }})
                        </p>
                        <p class="font-semibold text-gray-900">
                            RM {{ $total }}
                        </p>
                    </div>

                    <div class="flex justify-between">
                        <p class="text-gray-600">Insurance</p>
                        <p class="font-semibold text-gray-900">RM 0</p>
                    </div>

                    <div class="border-t border-gray-200 pt-3 flex justify-between">
                        <p class="text-lg font-bold text-gray-900">Total</p>
                        <p class="text-2xl font-bold text-blue-600">
                            RM {{ $total }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Confirm Form -->
            <form method="POST" action="{{ url('/booking/store') }}">
                @csrf

                <input type="hidden" name="car_id" value="{{ $car->id }}">
                <input type="hidden" name="start_date" value="{{ $start }}">
                <input type="hidden" name="end_date" value="{{ $end }}">
                <input type="hidden" name="total_price" value="{{ $total }}">

                <label class="flex items-start gap-3 mb-6">
                    <input type="checkbox" required class="mt-1">
                    <span class="text-sm text-gray-600">
                        I agree to the rental terms and confirm the booking details.
                    </span>
                </label>

                <div class="flex gap-4">
                    <a
                        href="{{ url('/booking/search') }}"
                        class="flex-1 py-3 text-center border-2 border-gray-300 text-gray-700 rounded-lg font-semibold hover:border-gray-400"
                    >
                        Back to Search
                    </a>

                    <button
                        type="submit"
                        class="flex-1 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700"
                    >
                        Confirm Booking
                    </button>
                </div>
            </form>
        </div>

        <!-- Info -->
        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
            <p class="text-sm text-blue-800">
                <strong>Note:</strong> Your booking will be pending until approved by admin.
            </p>
        </div>

    </div>
</div>
</x-app-layout>
