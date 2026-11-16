<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Ballora') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-blue-50">

<nav style="background-color:#b57edc;" class="shadow-md">
    @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">
                Logout
            </button>
        </form>
    @endauth

        @guest
            <div class="max-w-7xl mx-auto px-6 py-4">
                <div class="navbar flex gap-2">

                    <div>
                        <a href="{{ route('dashboard') }}" style="
                background:#c8a2c8;
                color:white;
                padding:10px 16px;
                border-radius:10px;
                text-decoration:none;
                font-weight:bold;">
                            Dashboard
                        </a>
                    </div>

                    <div>
                        <a href="login" style="
                background:#ec4899;
                color:white;
                padding:10px 16px;
                border-radius:10px;
                text-decoration:none;
                font-weight:bold;">
                            Login
                        </a>
                    </div>

                    <div>
                        <a href="register" style="
                background:#f472b6;
                color:white;
                padding:10px 16px;
                border-radius:10px;
                text-decoration:none;
                font-weight:bold;">
                            Register
                        </a>
                    </div>

                    <div>
                        <a href="tokens" style="
                background:#c8a2c8;
                color:white;
                padding:10px 16px;
                border-radius:10px;
                text-decoration:none;
                font-weight:bold;">
                            Tokens
                        </a>
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
