<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Raleway:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Missy Higgins</title>
</head>

<body>
    <div class="bg-yellow h-screen flex p-4 font-sans">
        <div class="m-auto bg-white rounded-lg shadow-xl p-3 md:flex md:p-0">
            <div>
                <img src="/images/background.jpg" alt="Abstract pattern"
                    class="h-40 md:h-96 md:rounded-bl-lg md:rounded-tl-lg ">
            </div>
            <div class="mt-2 md:mt-0 md:p-8 md:flex md:justify-center md:items-center">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
