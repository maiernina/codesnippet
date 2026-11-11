<?php
@extends('layouts.app')

@section('content')
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">

        <h2 class="text-3xl font-bold text-center text-blue-600 mb-6">
            Login
        </h2>

        <p class="mb-6 text sm text-shadow-violet-500">
            CodeSnippets
        </p>

        <div class="space-x-3">
        @foreach($snippets as $snippet)
            <div class="m-3">
            {{ $snippet->title }}
            </div>
        @endforeach
        </div>

    </div>
@endsection
