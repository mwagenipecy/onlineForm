@extends('layouts.main')
@section('main-section')



<!-- resources/views/contact.blade.php -->

<div class="max-w-4xl mx-auto   px-4 sm:px-6 lg:px-8 h-screen ">
    <div class="text-center mb-12">
        <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
            Contact Us
        </h1>
        <p class="mt-4 text-lg text-gray-500">
            Have questions? We'd love to hear from you.
        </p>
    </div>

    
    <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2">
        <div class="bg-white shadow overflow-hidden rounded-lg p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-lg font-medium text-gray-900">Phone</h3>
                    <p class="mt-1 text-sm text-gray-500">+1 (555) 123-4567</p>
                </div>
            </div>
        </div>

        <div class="bg-white shadow overflow-hidden rounded-lg p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-lg font-medium text-gray-900">Email</h3>
                    <p class="mt-1 text-sm text-gray-500">info@kamatimadini.tz</p>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection