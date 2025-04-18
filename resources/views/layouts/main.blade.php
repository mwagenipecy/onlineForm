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
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h1 class="text-2xl md:text-3xl font-bold">Data Collection Project</h1>
                </div>
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="{{ route('welcome') }}" class="hover:text-blue-300 transition">Home</a></li>
                        <li><a href="#" class="hover:text-blue-300 transition">About</a></li>
                        <li><a href="#" class="hover:text-blue-300 transition">Contact</a></li>
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
                    <a href="#" class="hover:text-blue-300 transition">Privacy Policy</a>
                    <a href="#" class="hover:text-blue-300 transition">Terms of Service</a>
                    <a href="#" class="hover:text-blue-300 transition">Contact</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
