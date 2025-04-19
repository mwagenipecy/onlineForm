
@extends('layouts.main')
@section('main-section')







<section class="text-center mb-12  mt-6">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">
        @if(session('locale') == 'sw')
            Karibu kwenye Jukwaa la Ukusanyaji Data
        @else
            Welcome to the Data Collection Platform
        @endif
    </h2>
    <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
        @if(session('locale') == 'sw')
            Chagua dodoso hapo chini na tusaidie kukusanya data muhimu ya mradi
        @else
            Choose a questionnaire below and help us gather important project data
        @endif
    </p>
</section>

<section class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
    <!-- Government Data -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
        <div class="bg-blue-600 h-2"></div>
        <div class="p-6">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-center mb-3">
                @if(session('locale') == 'sw')
                    Data ya Serikali
                @else
                    Government Data
                @endif
            </h3>
            <p class="text-gray-600 mb-6 text-center">
                @if(session('locale') == 'sw')
                    Shiriki takwimu na habari rasmi.
                @else
                    Share official stats and information.
                @endif
            </p>
            <div class="text-center">
                <a href="{{ route('government.data') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md transition">
                    @if(session('locale') == 'sw')
                        Anza
                    @else
                        Start
                    @endif
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
            <h3 class="text-xl font-bold text-center mb-3">
                @if(session('locale') == 'sw')
                    Ukusanyaji wa Wachimbaji
                @else
                    Miners Collection
                @endif
            </h3>
            <p class="text-gray-600 mb-6 text-center">
                @if(session('locale') == 'sw')
                    Tuambie kuhusu shughuli zako za uchimbaji.
                @else
                    Tell us about your mining activities.
                @endif
            </p>
            <div class="text-center">
                <a href="{{ route('miners.collection') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-6 rounded-md transition">
                    @if(session('locale') == 'sw')
                        Anza
                    @else
                        Start
                    @endif
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
            <h3 class="text-xl font-bold text-center mb-3">
                @if(session('locale') == 'sw')
                    Ukusanyaji wa Nyongeza
                @else
                    Supplementary Collection
                @endif
            </h3>
            <p class="text-gray-600 mb-6 text-center">
                @if(session('locale') == 'sw')
                    Ongeza taarifa za ziada kusaidia mradi.
                @else
                    Add extra info to support the project.
                @endif
            </p>
            <div class="text-center">
                <a href="{{ route('supplementary.collection') }}" class="inline-block bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-6 rounded-md transition">
                    @if(session('locale') == 'sw')
                        Anza
                    @else
                        Start
                    @endif
                </a>
            </div>
        </div>
    </div>
</section>

<div class="h-[50vh]">
</div>



@endsection