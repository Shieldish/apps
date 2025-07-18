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
            <h1 class="text-2xl font-bold"> <a href="/" class="text-dark-600 hover:text-blue-800"> {{ env('APP_NAME') }} </a></h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600">Login</a></li>
                    <li><a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-600">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="flex-1 container mx-auto p-4">
       
       {{$slot}}
    </main>
   
    <footer class="bg-white shadow p-4 mt-8">
        <div class="container mx-auto text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.
        </div>
    </footer>
</body>
</html>

