@extends('subscription.layout')

@section('content')
    <div>
        <div class="-ml-2 hidden md:block mb-4">
            <svg class="w-16 h-16 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <h1 class="font-bold leading-8 text-lg md:text-xl">Thank you for subscribing!</h1>
        <p class="text-gray-600 text-base mt-1">You will be sent the next issue of our newsletter shortly.</p>
    </div>
@endsection
