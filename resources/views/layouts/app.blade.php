<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Ballora') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-blue-50">

<nav class="bg-blue-600 shadow-md">
    @auth
        <div>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <x-button>Logout</x-button>
                    <a href="register">Register</a>

            </form>

        </div>
    @endauth

    @guest
    <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="navbar flex gap-2">
            <div>
                <a href="login">Login</a>
            </div>
            <div>
                <a href="register">Register</a>
            </div>
        </div>
    </div>
    @endguest
</nav>

<main class="flex items-center justify-center py-16 px-4">
    @yield('content')
</main>

</body>
</html>
``
