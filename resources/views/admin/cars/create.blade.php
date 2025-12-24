<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 flex items-center justify-center px-4">
    <div class="w-full max-w-xl">

        <div class="bg-white rounded-2xl shadow-lg p-8">

            <!-- Header -->
            <div class="mb-6 text-center">
                <h2 class="text-2xl font-bold text-gray-900 mb-1">Add New Car</h2>
                <p class="text-gray-600">Add a new car to the system</p>
            </div>

            <!-- Form -->
            <form method="POST" action="/admin/cars" enctype="multipart/form-data">
                @csrf

                <!-- Car Name -->
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Car Name
                    </label>
                    <input
                        type="text"
                        name="car_name"
                        required
                        placeholder="e.g. Honda Civic"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-600 focus:outline-none"
                    >
                </div>

                <!-- Plate Number -->
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Plate Number
                    </label>
                    <input
                        type="text"
                        name="plate_number"
                        required
                        placeholder="e.g. ABC 1234"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-600 focus:outline-none"
                    >
                </div>

                <!-- Price -->
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Price per Day (RM)
                    </label>
                    <input
                        type="number"
                        name="price_per_day"
                        required
                        placeholder="e.g. 80"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-600 focus:outline-none"
                    >
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Description
                    </label>
                    <textarea
                        name="description"
                        rows="3"
                        placeholder="Short description about the car"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-600 focus:outline-none"
                    ></textarea>
                </div>

                <!-- Image -->
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Car Image (optional)
                    </label>
                    <input
                        type="file"
                        name="image"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none"
                    >
                </div>

                <!-- Buttons -->
                <div class="flex gap-4">
                    <a
                        href="/admin/cars"
                        class="flex-1 py-3 text-center border-2 border-gray-300 text-gray-700 rounded-lg font-semibold hover:bg-gray-50"
                    >
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="flex-1 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700"
                    >
                        Save Car
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>
</x-app-layout>
