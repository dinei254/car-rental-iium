<x-guest-layout>
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 flex items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md">

        <div class="bg-white rounded-2xl shadow-lg p-8">

            <!-- Header -->
            <div class="text-center mb-8">
                <div class="flex items-center justify-center gap-2 mb-4">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold">CR</span>
                    </div>
                    <span class="text-2xl font-bold text-gray-900">CarRent</span>
                </div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Create Account</h1>
                <p class="text-gray-600">Join CarRent and start renting cars today</p>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                        Full Name
                    </label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        required
                        autofocus
                        placeholder="John Doe"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-600 focus:outline-none"
                    />
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        Email Address
                    </label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        required
                        placeholder="you@example.com"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-600 focus:outline-none"
                    />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                        Password
                    </label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        required
                        minlength="8"
                        placeholder="••••••••"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-600 focus:outline-none"
                    />
                    <p class="text-xs text-gray-500 mt-1">At least 8 characters</p>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">
                        Confirm Password
                    </label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        required
                        minlength="8"
                        placeholder="••••••••"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-600 focus:outline-none"
                    />
                </div>

                <!-- Terms (UI only, backend optional) -->
                <label class="flex items-start gap-3">
                    <input
                        type="checkbox"
                        required
                        class="w-4 h-4 rounded border-2 border-gray-300 text-blue-600 mt-1"
                    />
                    <span class="text-sm text-gray-600">
                        I agree to the
                        <a href="#" class="text-blue-600 hover:underline">Terms</a>
                        and
                        <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>
                    </span>
                </label>

                <!-- Submit -->
                <button
                    type="submit"
                    class="w-full py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 mt-6"
                >
                    Create Account
                </button>
            </form>

            <!-- Divider -->
            <div class="my-6 flex items-center gap-4">
                <div class="flex-1 border-t border-gray-200"></div>
                <span class="text-sm text-gray-500">or</span>
                <div class="flex-1 border-t border-gray-200"></div>
            </div>

            <!-- Login -->
            <div class="text-center">
                <p class="text-gray-600">
                    Already have an account?
                    <a href="{{ route('login') }}"
                       class="text-blue-600 hover:text-blue-700 font-semibold">
                        Sign in
                    </a>
                </p>
            </div>

        </div>
    </div>
</div>
</x-guest-layout>
