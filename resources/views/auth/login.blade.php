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
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Welcome Back</h1>
                <p class="text-gray-600">Sign in to your CarRent account</p>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

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
                        autofocus
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
                        placeholder="••••••••"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-600 focus:outline-none"
                    />
                </div>

                <!-- Remember & Forgot -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2">
                        <input
                            type="checkbox"
                            name="remember"
                            class="w-4 h-4 rounded border-2 border-gray-300 text-blue-600"
                        />
                        <span class="text-sm text-gray-600">Remember me</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a
                            href="{{ route('password.request') }}"
                            class="text-sm text-blue-600 hover:text-blue-700 font-medium"
                        >
                            Forgot password?
                        </a>
                    @endif
                </div>

                <!-- Submit -->
                <button
                    type="submit"
                    class="w-full py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 mt-6"
                >
                    Sign In
                </button>
            </form>

            <!-- Divider -->
            <div class="my-6 flex items-center gap-4">
                <div class="flex-1 border-t border-gray-200"></div>
                <span class="text-sm text-gray-500">or</span>
                <div class="flex-1 border-t border-gray-200"></div>
            </div>

            <!-- Register -->
            <div class="text-center">
                <p class="text-gray-600">
                    Don't have an account?
                    <a href="{{ route('register') }}"
                       class="text-blue-600 hover:text-blue-700 font-semibold">
                        Sign up
                    </a>
                </p>
            </div>

            <!-- Terms -->
            <p class="text-xs text-center text-gray-500 mt-6">
                By signing in, you agree to our
                <a href="#" class="text-blue-600 hover:underline">Terms</a>
                and
                <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>
            </p>
        </div>

    </div>
</div>
</x-guest-layout>
