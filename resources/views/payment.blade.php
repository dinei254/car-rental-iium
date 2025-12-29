

<x-app-layout>
<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
<!-- Progress Indicator -->
<div class="mb-10">
    <div class="flex items-center justify-center">

        <!-- Step 1 -->
        <div class="flex items-center">
            <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center shadow-md">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <span class="ml-2 text-sm text-gray-500 font-medium">Select Dates</span>
        </div>

        <div class="w-12 h-0.5 bg-green-500 mx-4"></div>

        <!-- Step 2 -->
        <div class="flex items-center">
            <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center shadow-md">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <span class="ml-2 text-sm text-gray-500 font-medium">Choose Car</span>
        </div>

        <div class="w-12 h-0.5 bg-green-500 mx-4"></div>

        <!-- Step 3 -->
        <div class="flex items-center">
            <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center shadow-md">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <span class="ml-2 text-sm text-gray-500 font-medium">Confirm</span>
        </div>

        <div class="w-12 h-0.5 bg-blue-600 mx-4"></div>

        <!-- Step 4 (current) -->
        <div class="flex items-center">
            <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-semibold shadow-md">
                4
            </div>
            <span class="ml-2 text-sm font-semibold text-gray-900">Payment</span>
        </div>

    </div>
</div>




        <!-- Header -->
        <div class="mb-8 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-green-600 rounded-2xl mb-4 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Complete Payment</h1>
            <p class="text-lg text-gray-600">Scan QR code and upload payment proof</p>
        </div>

        <!-- Payment Card -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-200 overflow-hidden mb-6">
            
            <!-- Amount Section -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-8 py-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-blue-100 font-semibold mb-1">Total Amount</p>
                        <p class="text-4xl font-bold text-white">
                            RM {{ number_format($booking->total_price, 2) }}
                        </p>
                    </div>
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- QR Code Section -->
            <div class="p-10 text-center border-b border-gray-200 bg-gray-50">
                <div class="flex items-center justify-center gap-2 mb-4">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                    </svg>
                    <h2 class="text-xl font-bold text-gray-900">DuitNow QR Code</h2>
                </div>
                
                <p class="text-gray-600 mb-6">
                    Scan this QR code using your banking app to make payment
                </p>

                <!-- QR Code Image -->
                <div class="inline-block bg-white p-4 rounded-2xl shadow-lg border-2 border-gray-200 mb-4">
                    <img
                        src="https://i.postimg.cc/HnVzdbSb/photo-2025-12-27-00-36-18.jpg"
                        alt="DuitNow QR Code"
                       class="w-72 h-72 object-contain"
                    >
                </div>

                <!-- Recipient Info -->
                <!-- <div class="inline-flex items-center gap-2 bg-gray-100 px-4 py-2 rounded-full">
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <span class="text-sm text-gray-700">
                        Payee: <strong class="text-gray-900">CarRent IIUM</strong>
                    </span>
                </div>
            </div> -->

            <!-- Upload Section -->
            <div class="p-8">
                <div class="flex items-center gap-2 mb-4">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                    </svg>
                    <h3 class="text-lg font-bold text-gray-900">Upload Payment Proof</h3>
                </div>

                <form method="POST" action="/payment/{{$booking->id}}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            Payment Receipt or Screenshot
                        </label>
                        
                       <div class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center hover:border-blue-600 hover:bg-blue-50 transition-all cursor-pointer">

                            <input
                                type="file"
                                name="payment_proof"
                                accept="image/*"
                                required
                                class="w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer"
                            >
                            <p class="text-xs text-gray-500 mt-2">
                                Accepted formats: JPG, PNG, PDF (Max 5MB)
                            </p>
                        </div>
                    </div>

                    <!-- Instructions -->
                    <div class="bg-blue-50 border border-blue-200 rounded-xl p-4 mb-6">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <p class="text-sm font-semibold text-blue-900 mb-1">Payment Instructions</p>
                                <ul class="text-sm text-blue-800 space-y-1 list-disc list-inside">
                                    <li>Make payment via DuitNow QR using your banking app</li>
                                    <li>Take a screenshot of the successful transaction</li>
                                    <li>Upload the screenshot or receipt above</li>
                                    <li>Wait for admin verification (usually within 24 hours)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <button
                        type="submit"
                        class="w-full py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl hover:from-blue-700 hover:to-blue-800 transition-all flex items-center justify-center gap-2 group"
                    >
                        <span>Submit Payment Proof</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- Warning Notice -->
        <div class="bg-yellow-50 border-2 border-yellow-200 rounded-xl p-5">
            <div class="flex items-start gap-3">
                <svg class="w-6 h-6 text-yellow-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                <div>
                    <p class="text-sm font-semibold text-yellow-900 mb-1">Pending Verification</p>
                    <p class="text-sm text-yellow-800">
                        Your booking status will remain <strong>pending</strong> until our admin team verifies your payment proof. You will receive a confirmation email once approved.
                    </p>
                </div>
            </div>
        </div>

        <!-- Back to Bookings -->
        <!-- <div class="mt-6 text-center">
            <a href="/my-bookings" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-900 font-medium transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to My Bookings
            </a>
        </div> -->

    </div>
</div>
</x-app-layout>