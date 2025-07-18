 <x-layout >
    <h1 class="text-3xl font-bold mb-6 text-center">Welcome to the main content area</h1>
    @auth
        <p class="text-gray-700 text-lg">

            Hello, {{ auth()->user()->name }}! You are logged in.

        </p>
        <x-demo></x-demo>
    @endauth

    @guest
        <p class="text-gray-700 text-center text-lg text-red-600 text-bold">
            {{-- You are currently not logged in. Please log in or register to access more features. --}}
            You are currently not logged in. Please log in or register to access more features.
        </p>
      
        <div class="mt-4 text-center text-gray-600">
            <p>Fill here with others msg</p>
        </div>
    @endguest
 </x-layout>