@extends('admin.layout')

@section('content')
    <div class="relative bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                        <span class="sr-only">Missy Higgins</span>
                        <img class="h-10 w-auto" src="/images/logo.gif" alt="">
                    </a>
                </div>
                <div class="md:flex items-center justify-end md:flex-1 lg:w-0">
                    <a href="/admin/logout"
                        class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                        Log out
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-6">
        <div class="py-6">
            <div>
                <h1 class="text-xl font-bold uppercase mb-3">Subscribers</h1>
                <div
                    class="flex flex-col justify-between md:flex-row md:items-center bg-gray-50 px-2 py-4 rounded md:shrink-0">
                    <div class="flex flex-col items-end">
                        <form class="w-full max-w-sm">
                            <div class="flex items-center border border-blue-100 rounded">
                                <input
                                    class="appearance-none bg-white border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                    type="text" placeholder="Search.." name="q">
                                <button
                                    class="flex-shrink-0 text-sm py-1 px-2 rounded-r bg-blue-500 hover:bg-blue-700 text-white"
                                    type="button">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="underline cursor-pointer text-blue-800 font-bold mt-4 md:mt-0 self-end md:self-auto">
                        Email all subscribers
                    </div>
                </div>
            </div>

            <div class="py-5 grid gap-4">
                @forelse ($subscriptions as $subscription)
                    <div class="shadow-sm border p-2 rounded grid gap-1 md:gap-5 md:p-4 md:flex md:justify-between">
                        <div class="md:w-1/4">{{ $subscription->name }}</div>
                        <div class="md:w-1/2">{{ $subscription->email }}</div>
                        <div>
                            <button class="underline text-blue-500 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="mt-3">
                        {{ $subscriptions->links() }}
                    </div>
                @empty
                    <div class="shadow px-2 py-3 rounded">
                        No subcribers yet.
                    </div>
                @endforelse
            </div>
        </div>
    </div>

@endsection
