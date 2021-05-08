<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Missy Higgins</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Raleway:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('lib/trix/trix.css') }}">
    <script type="text/javascript" src="{{ asset('lib/trix/trix.js') }}"></script>
</head>

<body>
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
    @yield('content')

    @yield('scripts')
</body>

</html>
