<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-6xl">

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">My Bookings</h1>
            <p class="text-xl text-gray-600">View and track your car rental bookings</p>
        </div>

        @if($bookings->count() > 0)

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                @foreach($bookings as $booking)
                    <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition-shadow overflow-hidden">

                        <!-- Header -->
                        <div class="px-6 py-4
                            @if($booking->status === 'pending') bg-yellow-500
                            @elseif($booking->status === 'approved') bg-green-600
                            @elseif($booking->status === 'rejected') bg-red-600
                            @else bg-gray-500
                            @endif
                        ">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-xs text-white opacity-80">Booking ID</p>
                                    <p class="text-lg font-bold text-white">
                                        #{{ $booking->id }}
                                    </p>
                                </div>

                                <span class="px-3 py-1 rounded-full text-xs font-bold bg-white
                                    @if($booking->status === 'pending') text-yellow-700
                                    @elseif($booking->status === 'approved') text-green-700
                                    @elseif($booking->status === 'rejected') text-red-700
                                    @else text-gray-700
                                    @endif
                                ">
                                    {{ ucfirst($booking->status) }}
                                </span>
                            </div>
                        </div>

                        <!-- Body -->
                        <div class="px-6 py-6 space-y-4">

                            <!-- Car Info -->
                            <div class="bg-gray-50 rounded-lg p-4">
                                <p class="text-xs text-gray-600 font-semibold mb-1">Vehicle</p>
                                <h3 class="text-lg font-bold text-gray-900">
                                    {{ $booking->car->car_name }}
                                </h3>
                                <p class="text-sm text-gray-600">
                                    Plate: {{ $booking->car->plate_number }}
                                </p>
                            </div>

                            <!-- Dates -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <p class="text-xs text-gray-600 font-semibold mb-1">Start Date</p>
                                    <p class="text-sm font-bold text-gray-900">
                                        {{ \Carbon\Carbon::parse($booking->start_date)->format('d M Y') }}
                                    </p>
                                </div>
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <p class="text-xs text-gray-600 font-semibold mb-1">End Date</p>
                                    <p class="text-sm font-bold text-gray-900">
                                        {{ \Carbon\Carbon::parse($booking->end_date)->format('d M Y') }}
                                    </p>
                                </div>
                            </div>

                            <!-- Payment Status -->
                            <div class="border-t pt-4">
                                <p class="text-sm font-semibold text-gray-700 mb-1">Payment Status</p>

                                @if($booking->payment_status === 'pending_verification')
                                    <span class="inline-block text-xs bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full font-semibold">
                                        Pending Verification
                                    </span>
                                @elseif($booking->payment_status === 'paid')
                                    <span class="inline-block text-xs bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">
                                        Payment Verified
                                    </span>
                                @else
                                    <span class="inline-block text-xs bg-gray-100 text-gray-800 px-3 py-1 rounded-full font-semibold">
                                        Not Paid
                                    </span>
                                @endif
                            </div>

                            <!-- Total -->
                            <div class="bg-blue-50 rounded-lg p-4">
                                <p class="text-xs text-blue-600 font-semibold mb-1">Total Amount</p>
                                <p class="text-lg font-bold text-blue-600">
                                    RM {{ number_format($booking->total_price, 2) }}
                                </p>
                            </div>

                            <!-- Status Message -->
                            <div class="border-t pt-4">
                                @if($booking->status === 'pending')
                                    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 text-sm text-yellow-800">
                                        ⏳ Your booking is awaiting admin approval.
                                    </div>
                                @elseif($booking->status === 'approved')
                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4 text-sm text-green-800">
                                        ✅ Booking approved. You may collect the car on your start date.
                                        <a
        href="/booking/{{ $booking->id }}/receipt"
        class="inline-block mt-3 px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700"
    >
        Download Receipt
    </a>
                                    </div>
                                @elseif($booking->status === 'rejected')
                                    <div class="bg-red-50 border border-red-200 rounded-lg p-4 text-sm text-red-800">
                                        ❌ Booking rejected. Please contact support.
                                    </div>
                                @endif
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

        @else
            <!-- Empty State -->
            <div class="bg-white rounded-2xl shadow-md p-12 text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">No Bookings Yet</h3>
                <p class="text-gray-600 mb-6">
                    You haven't made any bookings yet.
                </p>
                <a
                    href="/booking/search"
                    class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition-colors"
                >
                    Book a Car
                </a>
            </div>
        @endif

    </div>
</div>
</x-app-layout>
