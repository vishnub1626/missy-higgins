@extends('admin.layout')

@section('content')
    <div class="max-w-7xl mx-auto px-6 pb-10" id="dashboard">
        <div class="py-6">
            <h1 class="text-xl font-bold uppercase mb-2">Campaign</h1>
        </div>
        <div>
            <form action="/admin/newsletter/send" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="sending-to">
                        Sending to
                    </label>
                    <input type="hidden" name="to" value="{{ $to }}">
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="sending-to" type="text" value="{{ $toText }}" disabled>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="subject">
                        Subject
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @if ($errors->has('subject')) border-red-500 @endif"
                        id="subject" type="text" placeholder="subject" name="subject">
                    @if ($errors->has('subject'))
                        <p class="text-red-500 text-xs italic mt-1">{{ $errors->first('subject') }}</p>
                    @endif
                </div>
                <div class="mt-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="editor">
                        Body
                    </label>
                    <input id="editor" type="hidden" name="body">
                    <trix-editor input="editor"
                        class="shadow appearance-none border rounded w-full py-2 px-3 h-96 overflow-auto focus:outline-none focus:shadow-outline @if ($errors->has('body')) border-red-500 @endif">
                    </trix-editor>
                    @if ($errors->has('body'))
                        <p class="text-red-500 text-xs italic mt-1">{{ $errors->first('body') }}</p>
                    @endif
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a class="bg-gray-300 hover:bg-gray-400 text-black mr-5 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit" href="/admin/dashboard">
                        Cancel
                    </a>
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
