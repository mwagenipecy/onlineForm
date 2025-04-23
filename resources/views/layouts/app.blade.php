<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('/image/courtOfArm1.png') }}" type="image/png">

    <title>{{ config('app.name', 'Kamati Madini') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
</head>
<body class="font-sans antialiased bg-gray-50">
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-50">
        <!-- Sidebar Overlay -->
        <div x-show="sidebarOpen" 
            @click="sidebarOpen = false" 
            class="fixed inset-0 z-20 bg-black bg-opacity-50 transition-opacity md:hidden">
        </div>

        <!-- Sidebar -->
        <div x-show="sidebarOpen" 
            x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto bg-white shadow-lg md:hidden">
            
            <div class="flex items-center justify-between p-4 bg-gradient-to-r from-yellow-600 to-yellow-800">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('/image/courtOfArm1.png') }}" class="h-10 w-10" alt="Tanzania Coat of Arms" />
                    <span class="text-lg font-semibold text-white">Kamati Madini</span>
                </div>
                <button @click="sidebarOpen = false" class="text-white hover:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Navigation -->
            <nav class="p-4 space-y-1">
                <a href="{{ route('dashboard.list') }}" class="flex items-center px-4 py-3 rounded-lg {{ Request::is('dashboard') ? 'bg-yellow-50 text-yellow-700 font-medium' : 'text-gray-600 hover:bg-yellow-50 hover:text-yellow-700' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('government.list') }}" class="flex items-center px-4 py-3 rounded-lg {{ Request::is('government-list') ? 'bg-yellow-50 text-yellow-700 font-medium' : 'text-gray-600 hover:bg-yellow-50 hover:text-yellow-700' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                    </svg>
                    Government Data
                </a>
                <a href="{{ route('miner.list') }}" class="flex items-center px-4 py-3 rounded-lg {{ Request::is('miner') ? 'bg-yellow-50 text-yellow-700 font-medium' : 'text-gray-600 hover:bg-yellow-50 hover:text-yellow-700' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                    Miners Database
                </a>
                <a href="{{ route('supplementary.list') }}" class="flex items-center px-4 py-3 rounded-lg {{ Request::is('supplementary') ? 'bg-yellow-50 text-yellow-700 font-medium' : 'text-gray-600 hover:bg-yellow-50 hover:text-yellow-700' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Supplementary Data
                </a>
                <a href="{{ route('user.list') }}" class="flex items-center px-4 py-3 rounded-lg {{ Request::is('user-list') ? 'bg-yellow-50 text-yellow-700 font-medium' : 'text-gray-600 hover:bg-yellow-50 hover:text-yellow-700' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    User Management
                </a>
                
                <div class="pt-4 mt-4 border-t border-gray-200">
                    <h3 class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                        Reports
                    </h3>
                    <a href="#" class="flex items-center px-4 py-3 mt-1 rounded-lg text-gray-600 hover:bg-yellow-50 hover:text-yellow-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        Mining Statistics
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 rounded-lg text-gray-600 hover:bg-yellow-50 hover:text-yellow-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Revenue Reports
                    </a>
                </div>
            </nav>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64">
                <div class="flex flex-col h-0 flex-1 bg-white shadow-lg">
                    <div class="flex items-center justify-center h-16 flex-shrink-0 px-4 bg-gradient-to-r from-yellow-600 to-yellow-800">
                        <img src="{{ asset('/image/courtOfArm1.png') }}" class="h-10 w-10" alt="Tanzania Coat of Arms" />
                        <span class="ml-2 text-lg font-semibold text-white">Kamati Madini</span>
                    </div>
                    <div class="flex-1 flex flex-col overflow-y-auto">
                        <nav class="flex-1 px-2 py-6 space-y-1">
                            <a href="{{ route('dashboard.list') }}" class="group flex items-center px-4 py-3 text-sm font-medium rounded-lg {{ Request::is('dashboard') ? 'bg-yellow-50 text-yellow-700 border-l-4 border-yellow-600' : 'text-gray-600 hover:bg-yellow-50 hover:text-yellow-700' }} transition duration-150 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 {{ Request::is('dashboard') ? 'text-yellow-600' : 'text-gray-500' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Dashboard
                            </a>
                            <a href="{{ route('government.list') }}" class="group flex items-center px-4 py-3 text-sm font-medium rounded-lg {{ Request::is('government-list') ? 'bg-yellow-50 text-yellow-700 border-l-4 border-yellow-600' : 'text-gray-600 hover:bg-yellow-50 hover:text-yellow-700' }} transition duration-150 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 {{ Request::is('government-list') ? 'text-yellow-600' : 'text-gray-500' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                </svg>
                                Government Data
                            </a>
                            <a href="{{ route('miner.list') }}" class="group flex items-center px-4 py-3 text-sm font-medium rounded-lg {{ Request::is('miner') ? 'bg-yellow-50 text-yellow-700 border-l-4 border-yellow-600' : 'text-gray-600 hover:bg-yellow-50 hover:text-yellow-700' }} transition duration-150 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 {{ Request::is('miner') ? 'text-yellow-600' : 'text-gray-500' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                                </svg>
                                Miners Database
                            </a>
                            <a href="{{ route('supplementary.list') }}" class="group flex items-center px-4 py-3 text-sm font-medium rounded-lg {{ Request::is('supplementary') ? 'bg-yellow-50 text-yellow-700 border-l-4 border-yellow-600' : 'text-gray-600 hover:bg-yellow-50 hover:text-yellow-700' }} transition duration-150 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 {{ Request::is('supplementary') ? 'text-yellow-600' : 'text-gray-500' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Supplementary Data
                            </a>
                            <a href="{{ route('user.list') }}" class="group flex items-center px-4 py-3 text-sm font-medium rounded-lg {{ Request::is('user-list') ? 'bg-yellow-50 text-yellow-700 border-l-4 border-yellow-600' : 'text-gray-600 hover:bg-yellow-50 hover:text-yellow-700' }} transition duration-150 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 {{ Request::is('user-list') ? 'text-yellow-600' : 'text-gray-500' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                User Management
                            </a>
                            
                            <div class="pt-4 mt-4 border-t border-gray-200">
                                <h3 class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Reports
                                </h3>
                                <a href="#" class="group flex items-center px-4 py-3 mt-1 text-sm font-medium rounded-lg text-gray-600 hover:bg-yellow-50 hover:text-yellow-700 transition duration-150 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                    Mining Statistics
                                </a>
                                <a href="#" class="group flex items-center px-4 py-3 text-sm font-medium rounded-lg text-gray-600 hover:bg-yellow-50 hover:text-yellow-700 transition duration-150 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    Revenue Reports
                                </a>
                            </div>
                        </nav>
                    </div>
                    <div class="flex-shrink-0 flex border-t border-gray-200 p-4 bg-gray-50">
                        <div class="flex items-center w-full">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full border-2 border-yellow-300" src="https://ui-avatars.com/api/?name=Admin+User&background=CA8A04&color=fff" alt="Admin User">
                            </div>
                            <div class="ml-3 flex-1">
                                <p class="text-sm font-medium text-gray-800">Admin User</p>
                                <p class="text-xs text-gray-500">Regional Officer</p>
                            </div>
                            <div x-data="{ isOpen: false }" class="relative">
                                <button @click="isOpen = !isOpen" class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div x-show="isOpen" 
                                    @click.away="isOpen = false"
                                    class="origin-bottom-right absolute right-0 bottom-10 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 focus:outline-none">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-700 hover:bg-red-50">Sign out</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content area -->
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <!-- Top header -->
            <div class="relative z-10 flex-shrink-0 flex h-16 bg-white shadow-sm">
                <button @click="sidebarOpen = true" class="md:hidden px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div class="flex-1 px-4 flex justify-between">
                    <div class="flex-1 flex items-center">
                        <span class="hidden lg:block text-xl font-semibold text-yellow-800 uppercase tracking-wider">KAMATI MADINI</span>
                        <span class="lg:hidden text-xl font-semibold text-yellow-800 uppercase tracking-wider">MADINI</span>
                        <span class="ml-4 px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Survey Portal
                        </span>
                    </div>
                    <div class="ml-4 flex items-center md:ml-6 space-x-4">
                        <!-- Search -->
                        <div class="relative flex-shrink-0">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <input class="pl-10 pr-3 py-2 border border-gray-300 rounded-md text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500" type="search" placeholder="Search records...">
                        </div>
                        
                        <!-- Notifications -->
                        <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 relative">
                            <span class="sr-only">View notifications</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                        </button>

                        <!-- Help button -->
                        <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            <span class="sr-only">Get help</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>

                        <!-- Profile dropdown -->
                        <div class="relative" x-data="{ isOpen: false }">
                            <div>
                                <button @click="isOpen = !isOpen" type="button" class="max-w-xs bg-white rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full border-2 border-yellow-300" src="https://ui-avatars.com/api/?name=Admin+User&background=CA8A04&color=fff" alt="Admin User">
                                </button>
                            </div>

                            <div 
                                x-show="isOpen" 
                                @click.away="isOpen = false"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 focus:outline-none z-10" 
                                role="menu" 
                                aria-orientation="vertical" 
                                aria-labelledby="user-menu-button">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-700 hover:bg-red-50" role="menuitem">Sign out</button>
                                </form>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <main class="flex-1 relative overflow-y-auto focus:outline-none">
                    <div class="py-6">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                            <!-- Page title -->
                            <h1 class="text-2xl font-semibold text-gray-900">@yield('title')</h1>
                        </div>
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                            <!-- Replace with your content -->
                            @yield('content')
                            <!-- /End replace -->
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="//unpkg.com/alpinejs" defer></script>

        @livewireScripts
    </body>
    </html>