@extends('layouts.app')
@section('content')



<section class="mb-12 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Welcome to the Data Collection Platform</h2>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                Select one of the data collection options below to continue with your project assessment.
            </p>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-3 gap-8 ">
            <!-- Government Data -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="bg-blue-600 h-2"></div>
                <div class="p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-3">Government Data</h3>
                    <p class="text-gray-600 mb-6 text-center">
                        Access and analyze official government datasets and statistics.
                    </p>
                    <div class="text-center">
                        <a href="{{ route('government.data') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md transition">
                            Explore
                        </a>
                    </div>
                </div>
            </div>

            <!-- Miners Collection -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="bg-green-600 h-2"></div>
                <div class="p-6">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-3">Miners Collection</h3>
                    <p class="text-gray-600 mb-6 text-center">
                        View and analyze data collected from mining operations and activities.
                    </p>
                    <div class="text-center">
                        <a href="{{ route('miners.collection') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-6 rounded-md transition">
                            Explore
                        </a>
                    </div>
                </div>
            </div>

            <!-- Supplementary Collection -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="bg-purple-600 h-2"></div>
                <div class="p-6">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-3">Supplementary Collection</h3>
                    <p class="text-gray-600 mb-6 text-center">
                        Access additional datasets that complement the primary collections.
                    </p>
                    <div class="text-center">
                        <a href="{{ route('supplementary.collection') }}" class="inline-block bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-6 rounded-md transition">
                            Explore
                        </a>
                    </div>
                </div>
            </div>
        </section>

        


@endsection