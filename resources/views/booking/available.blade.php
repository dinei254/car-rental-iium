<x-app-layout>
<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-7xl">

        <!-- Progress Indicator -->
        <div class="mb-8">
            <div class="flex items-center justify-center gap-4">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center text-sm font-semibold shadow-md">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-gray-500">Select Dates</span>
                </div>
                <div class="w-12 h-0.5 bg-blue-600"></div>
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-semibold shadow-md">
                        2
                    </div>
                    <span class="text-sm font-semibold text-gray-900">Choose Car</span>
                </div>
                <div class="w-12 h-0.5 bg-gray-300"></div>
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center text-sm font-semibold">
                        3
                    </div>
                    <span class="text-sm font-medium text-gray-500">Confirm</span>

                 </div>
                <div class="w-12 h-0.5 bg-gray-300"></div>
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center text-sm font-semibold">
                        4
                    </div>
                    <span class="text-sm font-semibold text-gray-900">Payment</span>
                </div>
                    
                </div>
            </div>
        </div>

        <!-- Header -->
        <div class="mb-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">
                Choose Your Perfect Car
            </h2>
            <p class="text-lg text-gray-600">
                <span class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    {{ $cars->count() }} car(s) available for your dates
                </span>
            </p>
        </div>

        @if($cars->isEmpty())
            <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-12 text-center">
                <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M12 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-2 text-gray-900">No Cars Available</h3>
                <p class="text-gray-600 mb-6">
                    Unfortunately, there are no cars available for the selected dates.<br>
                    Please try selecting different dates.
                </p>
                <a href="{{ url('/booking/search') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Change Dates
                </a>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($cars as $car)
                <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group">

                    <!-- Image -->
                    <div class="relative h-52 bg-gradient-to-br from-gray-100 to-gray-200 overflow-hidden">
                        @if($car->image)
                            <img
                                src="{{ asset('storage/'.$car->image) }}"
                                alt="{{ $car->car_name }}"
                                class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-300"
                            >
                        @else
                            <div class="h-full w-full flex items-center justify-center">
                                <svg class="w-20 h-20 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                </svg>
                            </div>
                        @endif
                        
                        <!-- Badge -->
                        <div class="absolute top-3 right-3">
                            <span class="bg-white/95 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-semibold text-gray-700 shadow-md">
                                Available
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <!-- Car Name -->
                        <h3 class="text-xl font-bold mb-2 text-gray-900 group-hover:text-blue-600 transition-colors">
                            {{ $car->car_name }}
                        </h3>

                        <!-- Description -->
                        <p class="text-sm text-gray-600 mb-3 line-clamp-2">
                            {{ $car->description }}
                        </p>

                        <!-- Plate Number -->
                        <div class="flex items-center gap-2 mb-4 pb-4 border-b border-gray-100">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                            <span class="text-xs font-medium text-gray-500">
                                Plate: <span class="text-gray-700 font-semibold">{{ $car->plate_number }}</span>
                            </span>
                        </div>

                        <!-- Price -->
                        <div class="flex justify-between items-end mb-5">
                            <div>
                                <p class="text-3xl font-bold text-blue-600">
                                    RM{{ number_format($car->price_per_day, 2) }}
                                </p>
                                <p class="text-xs text-gray-500 font-medium">per day</p>
                            </div>
                            
                            <!-- Features -->
                            <div class="flex gap-2">
                                <div class="w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center" title="Air Conditioning">
                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                    </svg>
                                </div>
                                <div class="w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center" title="Automatic">
                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Select Button -->
                        <a
                            href="{{ url('/booking/confirm/'.$car->id.'?start='.$start.'&end='.$end) }}"
                            class="flex items-center justify-center gap-2 w-full py-3 bg-blue-600 text-white rounded-xl font-semibold hover:bg-blue-700 transition-colors shadow-md hover:shadow-lg group"
                        >
                            <span>Select This Car</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Back Button -->
        <div class="mt-8 text-center">
            <a href="{{ url('/booking/search') }}" class="inline-flex items-center gap-2 px-6 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg font-semibold hover:border-gray-400 hover:bg-gray-50 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Change Dates
            </a>
        </div>

    </div>
</div>
</x-app-layout>