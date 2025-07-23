 <x-layout>

     @auth
         <p class="text-gray-700 text-lg text-center mb-6">
             {{-- You are logged in as {{ auth()->user()->name }}. --}}
             {{-- You can access your dashboard and other features. --}}
         <h1 class="text-3xl font-bold mb-6 text-center ">Welcome to the main content area</h1>


       <p class="text-center"> Hello, {{ auth()->user()->name }}! You are logged in.</p> 
       </p>
       
                    <p class="text-gray-700 text-center text-lg">
                       Last post bodie
                    </p>
       
     @endauth

     @guest
         <p class="text-gray-700 text-center text-lg text-red-600 text-bold text-xl text-center mb-6">
             {{-- You are currently not logged in. Please log in or register to access more features. --}}
             You are currently not logged in. Please log in or register to access more features.
         </p>

         <div class="mt-4 text-center text-gray-600">
             <p>Fill here with others msg</p>
         </div>
     @endguest
 </x-layout>
