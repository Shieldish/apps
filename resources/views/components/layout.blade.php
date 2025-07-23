<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ env('APP_NAME') }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">
    <header class="bg-white shadow p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold"> <a href="/" class="text-dark-600 hover:text-blue-800">
                    {{ env('APP_NAME') }} </a></h1>
            <nav>

                @auth
                    <div class="relative inline-block text-left">
                        <button type="button" class="flex items-center space-x-2 focus:outline-none" id="user-menu-button"
                            aria-expanded="false" aria-haspopup="true"
                            onclick="document.getElementById('user-dropdown').classList.toggle('hidden')">
                            @php
                                $seed = rand(1, 70); // Max img supported by pravatar is around 70
                                $hash = md5($seed);
                                $randomColor = '#' . substr($hash, 0, 6); // use part of the hash as a hex color
                            @endphp

                            <img src="https://i.pravatar.cc/40?img={{ $seed }}" alt="User Avatar"
                                class="w-8 h-8 rounded-full border" style="border-color: {{ $randomColor }};">
                            <span class="font-semibold">{{ auth()->user()->name }}</span>


                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="user-dropdown"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden z-50">
                            <div class="py-1" role="menu" aria-orientation="vertical"
                                aria-labelledby="user-menu-button">
                                <a href="{{ route('dashboard') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Dashboard</a>
                                <a {{-- href="{{ route('settings') }}" --}} class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Settings</a>
                                <div class="border-t my-1"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100"
                                        role="menuitem">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script>
                        // Close dropdown when clicking outside
                        document.addEventListener('click', function(event) {
                            const button = document.getElementById('user-menu-button');
                            const dropdown = document.getElementById('user-dropdown');
                            if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                                dropdown.classList.add('hidden');
                            }
                        });
                    </script>
                @endauth
                @guest
                    <ul class="flex space-x-4">
                        <li>
                            <a href="{{ route('login') }}"
                                class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-600 transition-colors duration-200">
                                Login
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}"
                                class="px-4 py-2 rounded bg-gray-200 text-gray-700 hover:bg-gray-300 transition-colors duration-200">
                                Register
                            </a>
                        </li>
                    </ul>
                @endguest
            </nav>
        </div>
    </header>

    <main class="flex-1 container mx-auto p-4">

        {{ $slot }}
        
    </main>

    <footer class="bg-white shadow p-4 mt-8">
        <div class="container mx-auto text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.
        </div>
    </footer>
</body>

</html>
