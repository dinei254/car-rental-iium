<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 py-12 px-4">
<div class="max-w-2xl mx-auto">

<h1 class="text-4xl font-bold mb-6">Payment (DuitNow QR)</h1>

<div class="bg-white rounded-2xl shadow-lg p-8">

    <!-- Amount -->
    <div class="mb-6 bg-blue-50 border border-blue-200 rounded-lg p-4">
        <p class="text-sm text-blue-700 font-semibold">Amount to Pay</p>
        <p class="text-3xl font-bold text-blue-600">
            RM {{ $booking->total_price }}
        </p>
    </div>

    <!-- QR Section -->
    <div class="text-center mb-6">
        <p class="font-semibold text-gray-700 mb-3">
            Scan DuitNow QR to make payment
        </p>

        <!-- Static QR Image -->
        <img
            src="{{ asset('images/duitnow-qr.jpg') }}"
            alt="DuitNow QR"
            class="mx-auto w-64 rounded-lg border"
        >

        <p class="text-xs text-gray-500 mt-3">
            Pay to: <strong>CarRent IIUM</strong>
        </p>
    </div>

    <!-- Upload Proof -->
    <form method="POST" action="/payment/{{$booking->id}}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Upload Payment Proof (Screenshot / Receipt)
            </label>
            <input
                type="file"
                name="payment_proof"
                required
                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg"
            >
        </div>

        <button
            type="submit"
            class="w-full py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700"
        >
            Submit Payment Proof
        </button>
    </form>

</div>

<div class="mt-4 bg-yellow-50 border border-yellow-200 rounded-lg p-4">
    <p class="text-sm text-yellow-800">
        ⏳ Your booking will be reviewed after admin verifies the payment proof.
    </p>
</div>

</div>
</div>
</x-app-layout>
