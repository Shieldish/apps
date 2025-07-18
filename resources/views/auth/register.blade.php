<x-layout>
    <h1 class="text-3xl font-bold mb-6 text-center">Register</h1>
    <form method="POST" action="{{ route('register') }}" class="max-w-md mx-auto bg-white p-8 rounded shadow">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 mb-2">Name:</label>
            <input id="name" type="text" name="name" 
                value="{{ old('name') }}"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') ring-2 ring-red-500 @enderror">
            @error('name')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 mb-2">Email:</label>
            <input id="email" type="email" name="email" 
                value="{{ old('email') }}"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') ring-2 ring-red-500 @enderror">
            @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 mb-2">Password:</label>
            <input id="password" type="password" name="password" 
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') ring-2 ring-red-500 @enderror">
            @error('password')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="password_confirmation" class="block text-gray-700 mb-2">Confirm Password:</label>
            <input id="password_confirmation" type="password" name="password_confirmation" 
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password_confirmation') ring-2 ring-red-500 @enderror">
            @error('password_confirmation')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Register</button>
        <div class="mt-4 text-center">
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Already have an account? Login</a>
        </div>
    </form>
</x-layout>
