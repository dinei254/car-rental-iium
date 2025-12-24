<x-app-layout>
<div class="min-h-screen bg-slate-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-6xl">

        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900">
                Step 2: Select Your Car
            </h2>
            <p class="text-gray-600">
                {{ $cars->count() }} car(s) available
            </p>
        </div>

        @if($cars->isEmpty())
            <div class="bg-white rounded-2xl shadow p-12 text-center">
                <h3 class="text-xl font-bold mb-2">No cars available</h3>
                <p class="text-gray-600">
                    Try selecting different dates.
                </p>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($cars as $car)
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl">

                    <!-- Image -->
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        @if($car->image)
                            <img
                                src="{{ asset('storage/'.$car->image) }}"
                                class="h-full w-full object-cover"
                            >
                        @endif
                    </div>

                    <div class="p-6">
                        <h3 class="text-lg font-bold mb-1">
                            {{ $car->car_name }}
                        </h3>

                        <p class="text-sm text-gray-600 mb-2">
                            {{ $car->description }}
                        </p>

                        <p class="text-xs text-gray-500 mb-4">
                            Plate: {{ $car->plate_number }}
                        </p>

                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <p class="text-2xl font-bold text-blue-600">
                                    RM {{ $car->price_per_day }}
                                </p>
                                <p class="text-sm text-gray-500">per day</p>
                            </div>
                        </div>

                        <a
                            href="{{ url('/booking/confirm/'.$car->id.'?start='.$start.'&end='.$end) }}"
                            class="block w-full text-center py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700"
                        >
                            Select Car
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
</x-app-layout>
