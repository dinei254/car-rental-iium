<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-6xl">

        <!-- Header -->
        <div class="mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Book a Car</h1>
            <p class="text-xl text-gray-600">
                Select your dates and find the perfect car
            </p>
        </div>

        <!-- Date Selection -->
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                Step 1: Select Your Dates
            </h2>

            <form method="POST" action="{{ url('/booking/search') }}">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label class="block text-sm font-semibold mb-2">
                            Start Date
                        </label>
                        <input
                            type="date"
                            name="start_date"
                            min="{{ now()->toDateString() }}"
                            required
                            class="w-full px-4 py-3 border-2 rounded-lg focus:border-blue-600"
                        />
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-2">
                            End Date
                        </label>
                        <input
                            type="date"
                            name="end_date"
                            min="{{ now()->toDateString() }}"
                            required
                            class="w-full px-4 py-3 border-2 rounded-lg focus:border-blue-600"
                        />
                    </div>
                </div>

                <button
                    type="submit"
                    class="w-full mt-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700"
                >
                    Search Available Cars
                </button>
            </form>
        </div>

    </div>
</div>
</x-app-layout>
