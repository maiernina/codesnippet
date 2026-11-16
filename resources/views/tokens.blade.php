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

            <label class="flex items-center space-x-3">
                <input type="checkbox" name="abilities[]" value="codesnippets:list"
                @checked(is_array(old('abilities')) && in_array('codesnippets:list', old('abilities')))/>
                <span class="text-sm text-slate-700">{{__('Create codesnippets')}}</span>
            </label>
            <label class="flex items-center space-x-3">
                <input type="checkbox" name="abilities[]" value="codesnippets:create"
                    @checked(is_array(old('abilities')) && in_array('codesnippets:create', old('abilities')))/>/>
                <span class="text-sm text-slate-700">{{__('Create codesnippets')}}</span>
            </label>

            <button
                type="submit"
                style="background-color:#ec4899;color:white;padding:12px 20px;border-radius:10px;width:100%;border:none;font-weight:bold;cursor:pointer;"
            >
                Token erstellen
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
