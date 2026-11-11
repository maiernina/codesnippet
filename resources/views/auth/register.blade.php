@extends('layouts.app')

@section('content')
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">

        <h2 class="text-3xl font-bold text-center text-blue-600 mb-6">
            Registrieren
        </h2>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block mb-1 font-medium">
                    Name
                </label>

                <input
                    type="text"
                    name="name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <div>
                <label class="block mb-1 font-medium">
                    E-Mail
                </label>

                <input
                    type="email"
                    name="email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <div>
                <label class="block mb-1 font-medium">
                    Passwort
                </label>

                <input
                    type="password"
                    name="password"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <div>
                <label class="block mb-1 font-medium">
                    Passwort bestätigen
                </label>

                <input
                    type="password"
                    name="password_confirmation"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <x-button>
                Register
            </x-button>
        </form>

        <p class="text-center mt-4">
            Bereits registriert?
            <a href="{{ route('login') }}" class="text-blue-600 font-semibold hover:underline">
                Zum Login
            </a>
        </p>

    </div>
@endsection
