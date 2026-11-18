
@extends('layouts.app')

@section('content')
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">

        <h2 class="text-3xl font-bold text-center text-pink-600 mb-6">
            CodeSnippets
        </h2>



        <div class="space-y-3">

            @foreach($snippets as $snippet)

                <div class="bg-pink-100 border-2 border-pink-300 rounded-xl p-4 shadow-sm">

                    <a
                        href="{{ route('snippet.show', $snippet->id) }}"
                        class="font-semibold text-pink-700 block"
                    >
                        {{ $snippet->title }}
                    </a>

                </div>

            @endforeach

        </div>

    </div>
@endsection
