<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 py-8 px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-7xl">

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Admin Dashboard</h1>
            <p class="text-xl text-gray-600">Manage bookings and approvals</p>

            <div class="flex gap-4 mt-6">
                <a href="/admin/bookings"
                   class="px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold">
                    Bookings
                </a>
                <a href="/admin/cars"
                   class="px-4 py-2 bg-white border-2 rounded-lg font-semibold">
                    Manage Cars
                </a>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-white rounded-lg shadow p-6">
                <p class="text-sm text-gray-600 font-semibold">Total Bookings</p>
                <p class="text-3xl font-bold">{{ $bookings->count() }}</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <p class="text-sm text-gray-600 font-semibold">Pending</p>
                <p class="text-3xl font-bold text-yellow-600">{{ $pending->count() }}</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <p class="text-sm text-gray-600 font-semibold">Approved</p>
                <p class="text-3xl font-bold text-green-600">{{ $approvedCount }}</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <p class="text-sm text-gray-600 font-semibold">Rejected</p>
                <p class="text-3xl font-bold text-red-600">{{ $rejectedCount }}</p>
            </div>
        </div>

        <!-- Pending Bookings -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold mb-6">Pending Bookings</h2>

            @if($pending->isEmpty())
                <p class="text-gray-600">No pending bookings.</p>
            @else
                <table class="w-full">
                    <thead class="bg-gray-50 border-b">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-bold">Student</th>
                            <th class="px-4 py-2 text-left text-xs font-bold">Car</th>
                            <th class="px-4 py-2 text-left text-xs font-bold">Dates</th>
                            <th class="px-4 py-2 text-left text-xs font-bold">Total</th>
                            <th class="px-4 py-2 text-left text-xs font-bold">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pending as $booking)
                            <tr class="border-t">
                                <td class="px-4 py-2">
                                    <p class="font-semibold">{{ $booking->user->name }}</p>
                                    <p class="text-xs text-gray-500">{{ $booking->user->email }}</p>
                                </td>
                                <td class="px-4 py-2">
                                    {{ $booking->car->car_name }}
                                    <div class="text-xs text-gray-500">
                                        {{ $booking->car->plate_number }}
                                    </div>
                                </td>
                                <td class="px-4 py-2 text-sm">
                                    {{ $booking->start_date }} → {{ $booking->end_date }}
                                </td>
                                <td class="px-4 py-2 font-bold text-blue-600">
                                    RM {{ $booking->total_price }}
                                </td>
                                <td class="px-4 py-2">
                                    <div class="flex gap-2">
                                        <form method="POST" action="/admin/bookings/{{ $booking->id }}/approve">
                                            @csrf
                                            <button class="px-3 py-1 bg-green-600 text-white rounded text-xs">
                                                Approve
                                            </button>
                                        </form>
                                        <form method="POST" action="/admin/bookings/{{ $booking->id }}/reject">
                                            @csrf
                                            <button class="px-3 py-1 bg-red-600 text-white rounded text-xs">
                                                Reject
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        <!-- All Bookings -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold mb-6">All Bookings</h2>

            <table class="w-full">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="px-4 py-2 text-xs font-bold">ID</th>
                        <th class="px-4 py-2 text-xs font-bold">Student</th>
                        <th class="px-4 py-2 text-xs font-bold">Car</th>
                        <th class="px-4 py-2 text-xs font-bold">Total</th>
                        <th class="px-4 py-2 text-xs font-bold">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                        <tr class="border-t">
                            <td class="px-4 py-2 font-semibold">{{ $booking->id }}</td>
                            <td class="px-4 py-2">{{ $booking->user->name }}</td>
                            <td class="px-4 py-2">{{ $booking->car->car_name }}</td>
                            <td class="px-4 py-2 text-blue-600 font-bold">
                                RM {{ $booking->total_price }}
                            </td>
                            <td class="px-4 py-2">
                                <span class="px-2 py-1 rounded text-xs font-bold
                                    {{ $booking->status === 'approved' ? 'bg-green-100 text-green-800' : '' }}
                                    {{ $booking->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                    {{ $booking->status === 'rejected' ? 'bg-red-100 text-red-800' : '' }}
                                    {{ $booking->status === 'cancelled' ? 'bg-gray-100 text-gray-800' : '' }}
                                ">
                                    {{ ucfirst($booking->status) }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
</x-app-layout>
