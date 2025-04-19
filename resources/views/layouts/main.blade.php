<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Collection Project</title>
    <link rel="icon" href="{{ asset('/image/courtOfArm1.png') }}" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

</head>
<body class="bg-gray-100 min-h-screen">


<header class="bg-gray-800 text-white shadow-lg">
    <div class="container mx-auto px-4 py-2">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-4 md:mb-0">
                <a href="{{ route('welcome') }}" class="flex items-center">
                <img src="{{ asset('/image/courtOfArm1.png') }}" class="h-16 w-16 mr-3" />
                </a>
                <h1 class="text-2xl md:text-xl uppercase font-bold">Data Collection </h1>
            </div>
            <div class="flex items-center space-x-4">
           
                <!-- Navigation Menu -->
                <nav>
                    <ul class="flex space-x-4">
                        <!-- <li><a href="{{ route('welcome') }}" class="hover:text-blue-300 transition">Home</a></li> -->
                        <li><a href="{{ route('about.us') }}" class="hover:text-blue-300 transition">About</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-blue-300 transition">Contact</a></li>
                    </ul>
                </nav>

                     <!-- Language Toggle Button -->
                     <div class="relative" x-data="{ open: false, language: '{{ session('locale') }}' }">
                    <button @click="open = !open" class="flex items-center space-x-2 bg-blue-600 hover:bg-blue-700 px-3 py-2 rounded-md transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                        <span x-text="language === 'en' ? 'English' : 'Swahili'"></span>
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-36 bg-white text-gray-800 rounded-md shadow-lg py-1 z-50">
                        <a href="{{ route('locale.switch', 'en') }}" @click="language = 'en'; open = false" class="block px-4 py-2 hover:bg-gray-100">English</a>
                        <a href="{{ route('locale.switch', 'sw') }}" @click="language = 'sw'; open = false" class="block px-4 py-2 hover:bg-gray-100">Swahili</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</header>



    <main class="container mx-auto px-4 py-12">



    <div class="bg-gray-100 py-3 px-4 md:px-6">
    <div class="container mx-auto">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <!-- Home Link - Always visible -->
                <li class="inline-flex items-center">
    <a href="{{ route('welcome') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
        <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
        </svg>
        @if(session('locale') == 'sw')
            Mwanzo
        @else
            Home
        @endif
    </a>
</li>

<!-- Dynamic Breadcrumbs -->
<li>
    <div class="flex items-center">
        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>

        @if(Request::is('about-us'))
            <span class="text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw') Kuhusu Sisi @else About Us @endif
            </span>
        @elseif(Request::is('contact'))
            <span class="text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw') Wasiliana Nasi @else Contact @endif
            </span>
        @elseif(Request::is('dashboard'))
            <span class="text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw') Dashibodi @else Dashboard @endif
            </span>
        @elseif(Request::is('miners-collection'))   
            <span class="text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw') Ukusanyaji wa Wachimbaji @else Miners Collection @endif
            </span>
        @elseif(Request::is('supplementary-collection'))
            <span class="text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw') Taarifa za Ziada @else Supplementary Collection @endif
            </span>
        @elseif(Request::is('government-data'))
            <span class="text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw') Taarifa za Serikali @else Government Data @endif
            </span>
        @elseif(Request::is('privacy'))
            <span class="text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw') Sera ya Faragha @else Privacy Policy @endif
            </span>
        @elseif(Request::is('terms'))
            <span class="text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw') Masharti ya Matumizi @else Terms and Conditions @endif
            </span>
        @endif
    </div>
</li>



            </ol>
        </nav>
    </div>
</div>



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
