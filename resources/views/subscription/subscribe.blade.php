@extends('subscription.layout')

@section('content')
    <div>
        <h1 class="uppercase font-bold leading-8 md:text-xl md:mb-2">Subscribe</h1>
        <p class="text-gray-600 text-sm">Subscribe to our newsletter and never miss an update</p>
        <form action="/newsletter/subscribe" method="POST" class="mt-4">
            @csrf
            <div class="mb-4">
                <input
                    class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="Name" name="name" required>
            </div>
            <div class="mb-6">
                <input
                    class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="email" placeholder="Email" name="email" required>
            </div>
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                type="submit" required>
                Subscribe
            </button>
        </form>
    </div>
@endsection
