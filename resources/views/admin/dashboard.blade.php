@extends('admin.layout')

@section('content')
    <div class="max-w-7xl mx-auto px-6" id="dashboard">
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
                                    type="text" placeholder="Search by email.." name="q" value="{{ request('q', '') }}">
                                <button
                                    class="flex-shrink-0 text-sm py-1 px-2 rounded-r bg-blue-500 hover:bg-blue-700 text-white"
                                    type="submit">
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
                        <a href="/admin/newsletter/send?to=all">
                            Email all subscribers
                        </a>
                    </div>
                </div>
            </div>

            <div class="py-5 grid gap-4">
                @forelse ($subscriptions as $subscription)
                    <div class="shadow-sm border p-2 rounded grid gap-1 md:gap-5 md:p-4 md:flex md:justify-between">
                        <div class="md:w-1/4">{{ $subscription->name }}</div>
                        <div class="md:w-1/2">{{ $subscription->email }}</div>
                        <div class="md:flex md:items-center md:justify-center mt-4 md:mt-0">
                            <button class="underline text-blue-500 cursor-pointer mr-2">
                            <a href="/admin/newsletter/send?to={{ $subscription->email }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                    </svg>
                            </a>
                            </button>
                            <form method="post" action="/admin/subscriptions/{{ $subscription->id }}">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                                <button class="underline text-red-500 cursor-pointer" @click.prevent="askConfirmation">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>

                @empty
                    <div class="shadow px-2 py-3 rounded">
                        No subcribers yet.
                    </div>
                @endforelse
                <div class="mt-3">
                    {{ $subscriptions->links() }}
                </div>
            </div>
        </div>
        <confirmation-modal :show="confirmDeletion" @close="confirmDeletion = false" @confirm="deleteMessage"
            @cancel="confirmDeletion = false" />
    </div>
@endsection

@section('scripts')
<script src="{{ mix('js/dashboard.js') }}"></script>
@endsection
