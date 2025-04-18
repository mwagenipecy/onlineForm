<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Collection Project</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100 min-h-screen">
<header class="bg-gray-800 text-white shadow-lg">
    <div class="container mx-auto px-4 py-2">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-4 md:mb-0">
                <a href="{{ route('welcome') }}" class="flex items-center">
                <img src="{{ asset('/image/courtOfArm1.png') }}" class="h-16 w-16 mr-3" />

                </a>
                <h1 class="text-2xl md:text-xl  uppercase font-bold">Data Collection </h1>
            </div>
            <nav>
                <ul class="flex space-x-4">
                    <!-- <li><a href="{{ route('welcome') }}" class="hover:text-blue-300 transition">Home</a></li> -->
                    <li><a href="{{ route('about.us') }}" class="hover:text-blue-300 transition">About</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-blue-300 transition">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

    <main class="container mx-auto px-4 py-12">

   @yield('main-section')
   
   
    </main>
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <p>&copy; {{ date('Y') }} Data Collection Project. All rights reserved.</p>
                </div>
                <div class="flex space-x-4">
                    <a href="{{ route('privacy') }}" class="hover:text-blue-300 transition">Privacy Policy</a>
                    <a href="{{ route('terms.conditions') }}" class="hover:text-blue-300 transition">Terms of Service</a>
                    <a href="{{ route('contact') }}" class="hover:text-blue-300 transition">Contact</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
