<nav x-data="{ open: false }" class="bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Left -->
            <div class="flex items-center gap-8">
                <!-- Logo -->
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                    <div class="w-9 h-9 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold">
                        CR
                    </div>
                    <span class="text-lg font-bold text-gray-900 hidden sm:block">
                        CarRent
                    </span>
                </a>

                <!-- Links -->
                <div class="hidden sm:flex gap-2">
                    <a
                        href="{{ route('dashboard') }}"
                        class="px-4 py-2 rounded-lg font-semibold text-sm
                        {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                        Home
                    </a>
                    <a
                        href="/my-bookings"
                        class="px-4 py-2 rounded-lg font-semibold text-sm
                        {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                        My Bookings
                    </a>

                    @if(auth()->user()->role === 'admin')
                        <a
                            href="/admin/bookings"
                            class="px-4 py-2 rounded-lg font-semibold text-sm
                            {{ request()->is('admin/*') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                            Admin
                        </a>
                    @endif
                </div>
            </div>

            <!-- Right -->
            <div class="hidden sm:flex items-center gap-4">
                <div x-data="{ openDropdown: false }" class="relative">
                    <button
                        @click="openDropdown = !openDropdown"
                        class="flex items-center gap-2 px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-50"
                    >
                        {{ Auth::user()->name }}
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div
                        x-show="openDropdown"
                        @click.outside="openDropdown = false"
                        class="absolute right-0 mt-2 w-44 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden"
                    >
                        <a
                            href="{{ route('profile.edit') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Profile
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                                type="submit"
                                class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Mobile button -->
            <div class="sm:hidden flex items-center">
                <button
                    @click="open = !open"
                    class="p-2 rounded-lg text-gray-600 hover:bg-gray-100"
                >
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            :class="{ 'hidden': open }"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                        <path
                            :class="{ 'hidden': !open }"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" class="sm:hidden px-4 pb-4 space-y-2">
        <a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded-lg font-semibold text-gray-700 hover:bg-gray-100">
            Dashboard
        </a>

        @if(auth()->user()->role === 'admin')
            <a href="/admin/bookings" class="block px-4 py-2 rounded-lg font-semibold text-gray-700 hover:bg-gray-100">
                Admin Dashboard
            </a>
        @endif

        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-100">
            Profile
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="w-full text-left px-4 py-2 rounded-lg text-red-600 hover:bg-red-50">
                Log Out
            </button>
        </form>
    </div>
</nav>
