@extends('layouts.app')

@section('content')

    <div class="w-full max-w-3xl bg-white rounded-xl shadow-lg p-8">

        <h1 class="text-3xl font-bold text-pink-600 mb-6">
            {{ $snippet->title }}
        </h1>

        <div class="bg-pink-100 border-2 border-pink-300 rounded-xl p-4">
            <pre>{{ $snippet->code }}</pre>
        </div>

    </div>

@endsection
