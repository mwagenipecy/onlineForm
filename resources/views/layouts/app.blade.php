<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-white">
        

    <div x-data="{ sidebarOpen: false, showLogout: false }" class="flex h-screen bg-gray-100">

    <!-- Sidebar -->
    <div :class="sidebarOpen ? 'block' : 'hidden md:block'" class="bg-white w-64 space-y-6 py-7 px-2 border-r border-gray-200 md:flex md:flex-col">
        <h2 class="text-2xl font-semibold text-center text-blue-600">Admin Panel</h2>

        <nav class="mt-6 ml-6 ">
        <a href="{{ route('dashboard.list') }}"
                class="@if(Request::is('dashboard')) bg-blue-400 text-white @endif block py-2.5 px-4 rounded hover:bg-blue-100 text-gray-700">
                Dashboard
                </a>

            <a href="{{ route('government.list') }}" class=" @if(Request::is('government-list')) bg-blue-400 text-white @endif  block py-2.5 px-4 rounded hover:bg-blue-100 text-gray-700">Government</a>
            <a href="{{ route('miner.list') }}" class=" @if(Request::is('miner')) bg-blue-400 text-white @endif  block py-2.5 px-4 rounded hover:bg-blue-100 text-gray-700">Miners</a>
            <a href="{{ route('supplementary.list') }}" class=" @if(Request::is('supplementary')) bg-blue-400 text-white @endif  block py-2.5 px-4 rounded hover:bg-blue-100 text-gray-700">Supplementary</a>
            <a href="{{ route('user.list') }}" class=" @if(Request::is('user-list')) bg-blue-400 text-white @endif  block py-2.5 px-4 rounded hover:bg-blue-100 text-gray-700">Users</a>
        </nav>
    </div>

    <!-- Content Wrapper -->
    <div class="flex-1 flex flex-col overflow-hidden">

        <!-- Navbar -->
        <header class="flex justify-between border-b border-1 shadow-lg items-center bg-white shadow px-6 py-4">
            <button @click="sidebarOpen = !sidebarOpen" class="md:hidden text-gray-600 focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <div class="color-blue-800 font-bold uppercase strong">
                ONLINE FORM 

            </div> <!-- placeholder center -->

            <!-- User Icon -->
            <!-- User Icon with Dropdown -->
<div class="relative" x-data="{ open: false }">
    <button @click="open = !open" class="focus:outline-none flex items-center">
        <img src="https://ui-avatars.com/api/?name=User" alt="User" class="h-8 w-8 rounded-full">
    </button>

    <div x-show="open" @click.away="open = false" x-transition
         class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50">
        <div class="py-1 text-sm text-gray-700">
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
            </form>
        </div>
    </div>
</div>



        </header>

        <!-- Main Content -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto p-6 bg-white">
            @yield('content')
        </main>
    </div>

  
</div>





        @livewireScripts
    </body>
</html>
