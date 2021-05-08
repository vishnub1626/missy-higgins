@extends('admin.layout')

@section('content')
    <div class="relative bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                        <span class="sr-only">Missy Higgins</span>
                        <img class="h-10 w-auto" src="/images/logo.gif"
                            alt="">
                    </a>
                </div>
                <div class="md:flex items-center justify-end md:flex-1 lg:w-0">
                    <a href="/admin/logout" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                        Log out
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-6">
        <div class="py-6">
            Welcome
        </div>
    </div>

@endsection
