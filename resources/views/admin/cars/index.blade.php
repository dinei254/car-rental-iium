<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 py-8 px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-7xl">

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Manage Cars</h1>
            <p class="text-xl text-gray-600">Add, edit, and manage your car inventory</p>

            <div class="flex gap-4 mt-6">
                <a href="/admin/bookings"
                   class="px-4 py-2 bg-white border rounded-lg font-semibold">
                    Bookings
                </a>
                <a href="/admin/cars"
                   class="px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold">
                    Manage Cars
                </a>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div class="bg-white rounded-lg shadow p-6">
                <p class="text-sm text-gray-600 font-semibold">Total Cars</p>
                <p class="text-3xl font-bold">{{ $cars->count() }}</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <p class="text-sm text-gray-600 font-semibold">Available</p>
                <p class="text-3xl font-bold text-green-600">{{ $availableCount }}</p>
            </div>
        </div>

        <!-- Add Button -->
        <div class="mb-6 flex justify-end">
            <a href="/admin/cars/create"
               class="px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold">
                Add Car
            </a>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <table class="w-full">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="px-4 py-2 text-xs font-bold">Image</th>
                        <th class="px-4 py-2 text-xs font-bold">Car</th>
                        <th class="px-4 py-2 text-xs font-bold">Plate</th>
                        <th class="px-4 py-2 text-xs font-bold">Price</th>
                        <th class="px-4 py-2 text-xs font-bold">Status</th>
                        <th class="px-4 py-2 text-xs font-bold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cars as $car)
                        <tr class="border-t">
                            <td class="px-4 py-2">
                                @if($car->image)
                                    <img src="{{ asset('storage/'.$car->image) }}" class="w-16 h-12 object-cover rounded">
                                @endif
                            </td>
                            <td class="px-4 py-2">
                                <strong>{{ $car->car_name }}</strong>
                                <div class="text-xs text-gray-500">
                                    {{ $car->description }}
                                </div>
                            </td>
                            <td class="px-4 py-2">{{ $car->plate_number }}</td>
                            <td class="px-4 py-2 text-blue-600 font-bold">
                                RM {{ $car->price_per_day }}
                            </td>
                            <td class="px-4 py-2">
                                <span class="px-2 py-1 rounded text-xs font-bold
                                    {{ $car->status === 'available' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ ucfirst($car->status) }}
                                </span>
                            </td>
                            <td class="px-4 py-2 flex gap-2">
                                <a href="/admin/cars/{{ $car->id }}/edit"
                                   class="px-3 py-1 bg-blue-600 text-white rounded text-xs">
                                    Edit
                                </a>

                                <form method="POST" action="/admin/cars/{{ $car->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-3 py-1 bg-red-600 text-white rounded text-xs">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
</x-app-layout>
