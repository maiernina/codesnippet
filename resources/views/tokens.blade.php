@extends('layouts.app')

@section('content')

    <div class="max-w-md mx-auto bg-pink-100 rounded-xl shadow-lg p-8">

        <h1 class="text-3xl font-bold text-center text-pink-600 mb-6">
            Token erstellen
        </h1>

        <form method="POST" action="{{ route('tokens.store') }}">
            @csrf

            <label class="block text-pink-700 font-semibold mb-2">
                Titel
            </label>

            <input
                type="text"
                name="title"
                placeholder="Titel eingeben..."
                class="w-full border-2 border-pink-300 rounded-lg p-3 mb-4 focus:outline-none focus:border-pink-500"
                required
            >

            <button
                type="submit"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 rounded-lg transition"
            >
                💖 Token erstellen
            </button>
        </form>

        @isset($token)
            <div class="mt-6 p-4 bg-pink-200 border border-pink-400 rounded-lg">
                <h2 class="font-bold text-pink-700 mb-2">
                    Dein Token:
                </h2>

                <p class="break-all text-pink-900">
                    {{ $token }}
                </p>
            </div>
        @endisset

    </div>

@endsection
