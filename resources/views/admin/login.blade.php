<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Missy Higgins | Admin login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Raleway:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-yellow">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-lg shadow-lg w-screen md:w-96">
            <p class="px-5 py-3 text-lg font-bold border-b border-gray-800">Missy Higgins | Admin</p>
            <form action="/admin/login" method="POST" class="p-5 mt-1">
                @csrf
                <div class="mb-4">
                    <input
                        class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="text" placeholder="Email" name="email" required>
                </div>
                <div class="mb-6">
                    <input
                        class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Password" name="password" required>
                </div>
                <div class="text-right">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
