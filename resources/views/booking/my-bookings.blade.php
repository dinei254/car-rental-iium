<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-6xl">

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">My Bookings</h1>
            <p class="text-xl text-gray-600">View and manage your bookings</p>
        </div>

        <!-- Filters -->
        <div class="flex flex-wrap gap-2 mb-8">
            <a href="{{ url('/my-bookings') }}"
               class="px-4 py-2 rounded-lg font-semibold {{ request('status') ? 'bg-white border' : 'bg-blue-600 text-white' }}">
                All
            </a>
            <a href="{{ url('/my-bookings?status=pending') }}"
               class="px-4 py-2 rounded-lg font-semibold bg-yellow-100 text-yellow-800">
                Pending
            </a>
            <a href="{{ url('/my-bookings?status=approved') }}"
               class="px-4 py-2 rounded-lg font-semibold bg-green-100 text-green-800">
                Approved
            </a>
            <a href="{{ url('/my-bookings?status=rejected') }}"
               class="px-4 py-2 rounded-lg font-semibold bg-red-100 text-red-800">
                Rejected
            </a>
            <a href="{{ url('/my-bookings?status=cancelled') }}"
               class="px-4 py-2 rounded-lg font-semibold bg-gray-200 text-gray-800">
                Cancelled
            </a>
        </div>

        @if($bookings->isEmpty())
            <!-- Empty State -->
            <div class="bg-white rounded-2xl shadow-md p-12 text-center">
                <h3 class="text-2xl font-bold mb-2">No Bookings</h3>
                <p class="text-gray-600 mb-6">You have no bookings yet.</p>
                <a href="{{ url('/booking/search') }}"
                   class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700">
                    Book Your First Car
                </a>
            </div>
        @endif

        <!-- Bookings -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            @foreach($bookings as $booking)
                <div class="bg-white rounded-2xl shadow-md overflow-hidden">

                    <!-- Status Header -->
                    <div class="px-6 py-4
                        {{ $booking->status === 'pending' ? 'bg-yellow-500' : '' }}
                        {{ $booking->status === 'approved' ? 'bg-green-500' : '' }}
                        {{ $booking->status === 'rejected' ? 'bg-red-500' : '' }}
                        {{ $booking->status === 'cancelled' ? 'bg-gray-500' : '' }}
                    ">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-xs text-white opacity-75">Booking ID</p>
                                <p class="text-lg font-bold text-white">{{ $booking->id }}</p>
                            </div>
                            <span class="bg-white px-3 py-1 rounded-full text-xs font-bold">
                                {{ ucfirst($booking->status) }}
                            </span>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="px-6 py-6 space-y-4">

                        <!-- Car -->
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-xs text-gray-600 font-semibold mb-1">Vehicle</p>
                            <h3 class="text-lg font-bold">{{ $booking->car->car_name }}</h3>
                            <p class="text-sm text-gray-600">
                                Plate: {{ $booking->car->plate_number }}
                            </p>
                        </div>

                        <!-- Dates -->
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-gray-50 rounded-lg p-4">
                                <p class="text-xs text-gray-600 font-semibold">Start</p>
                                <p class="font-bold">{{ $booking->start_date }}</p>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-4">
                                <p class="text-xs text-gray-600 font-semibold">End</p>
                                <p class="font-bold">{{ $booking->end_date }}</p>
                            </div>
                        </div>

                        <!-- Total -->
                        <div class="bg-blue-50 rounded-lg p-4">
                            <p class="text-xs text-blue-600 font-semibold">Total</p>
                            <p class="text-lg font-bold text-blue-600">
                                RM {{ $booking->total_price }}
                            </p>
                        </div>

                        <!-- Status Info -->
                        @if($booking->status === 'pending')
                            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 text-sm">
                                Awaiting admin approval.
                            </div>
                        @elseif($booking->status === 'approved')
                            <div class="bg-green-50 border border-green-200 rounded-lg p-4 text-sm">
                                Booking approved. You may collect the car.
                            </div>
                        @elseif($booking->status === 'rejected')
                            <div class="bg-red-50 border border-red-200 rounded-lg p-4 text-sm">
                                Booking rejected.
                            </div>
                        @elseif($booking->status === 'cancelled')
                            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 text-sm">
                                Booking cancelled.
                            </div>
                        @endif
                    </div>

                    <!-- Actions -->
                    <div class="px-6 py-4 bg-gray-50 border-t flex gap-2">
                        @if($booking->status === 'pending')
                            <form method="POST" action="{{ url('/booking/'.$booking->id.'/cancel') }}">
                                @csrf
                                <button
                                    class="px-4 py-2 border-2 border-red-300 text-red-600 rounded-lg hover:bg-red-50 font-semibold text-sm">
                                    Cancel Booking
                                </button>
                            </form>
                        @endif

                        <a href="#" class="ml-auto px-4 py-2 bg-gray-300 text-gray-700 rounded-lg font-semibold text-sm">
                            Contact Support
                        </a>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</div>
</x-app-layout>
