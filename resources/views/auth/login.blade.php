<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-b from-gray-50 to-gray-200">
        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="flex flex-col items-center justify-center mb-8">
                <div class="bg-yellow-50 p-4 rounded-full border-2 border-yellow-100 shadow-md mb-4">
                    <img src="{{ asset('/image/courtOfArm1.png') }}" class="h-20 w-20" alt="Tanzania Coat of Arms" />
                </div>
                
                <h1 class="text-gray-800 uppercase text-2xl font-bold tracking-wide text-center">Kamati Madini</h1>
                <p class="text-gray-600 text-sm mt-1">Ministry of Minerals Survey Platform</p>
                
                <div class="w-full mt-6 border-t border-gray-200"></div>
            </div>

            <x-validation-errors class="mb-4 rounded-md bg-red-50 p-3 text-sm text-red-600" />

            @session('status')
                <div class="mb-4 p-3 bg-green-50 rounded-md font-medium text-sm text-green-600">
                    {{ $value }}
                </div>
            @endsession

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div>
                    <x-label for="email" value="{{ __('Email Address') }}" class="font-medium text-gray-700" />
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <x-input id="email" class="block mt-1 w-full pl-10 rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200 focus:ring-opacity-50" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="your.email@example.com" />
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <x-label for="password" value="{{ __('Password') }}" class="font-medium text-gray-700" />
                        @if (Route::has('password.request'))
                            <a class="text-xs text-yellow-600 hover:text-yellow-800 font-medium" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <x-input id="password" class="block mt-1 w-full pl-10 rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200 focus:ring-opacity-50" type="password" name="password" required autocomplete="current-password" placeholder="••••••••" />
                    </div>
                </div>

                <div class="flex items-center">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" class="rounded text-yellow-600 shadow-sm focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition duration-150 ease-in-out">
                        {{ __('Sign in to Dashboard') }}
                    </button>
                </div>
            </form>

            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Secure Access Only</span>
                    </div>
                </div>
                
                <div class="mt-6 text-center text-xs text-gray-500">
                    <p>Ministry of Minerals, The United Republic of Tanzania</p>
                    <p class="mt-1">© {{ date('Y') }} All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>