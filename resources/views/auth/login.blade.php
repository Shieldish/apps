<x-layout>
    <h1 class="text-3xl font-bold mb-6 text-center">Login</h1>

    <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto bg-white p-8 rounded shadow">
        @csrf

        {{-- Email --}}
        <div class="mb-4">
            <label for="email" class="block text-gray-700 mb-2">Email:</label>
            <input id="email" type="email" name="email" required autofocus
                value="{{ old('email') }}"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') ring-2 ring-red-500 @enderror">
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Password with toggle icon --}}
        <div class="mb-6 relative">
            <label for="password" class="block text-gray-700 mb-2">Password:</label>
            <input id="password" type="password" name="password" required
                class="w-full px-3 py-2 border border-gray-300 rounded pr-10 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') ring-2 ring-red-500 @enderror">
            
            {{-- Toggle Icon --}}
            <span class="absolute top-9 right-3 cursor-pointer text-gray-600" onclick="togglePasswordVisibility()">
                👁️
            </span>

            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Remember Me --}}
        <div class="mb-6 flex items-center">
            <input id="remember" type="checkbox" name="remember" class="mr-2" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember" class="text-gray-700 select-none">Remember Me</label>
        </div>

        {{-- Submit --}}
        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Login</button>

        {{-- Links --}}
        <div class="mt-4 text-center">
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Don't have an account? Register</a>
        </div>
        <div class="mt-2 text-center">
            <a href="#" class="text-blue-600 hover:underline">Forgot your password?</a>
            {{-- Update the href when password reset is ready --}}
        </div>
    </form>

    {{-- JS toggle for password --}}
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("password");
            passwordInput.type = passwordInput.type === "password" ? "text" : "password";
        }
    </script>
</x-layout>
