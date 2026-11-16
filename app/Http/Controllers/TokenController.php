<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TokenController extends Controller
{
    public function index()
    {
        return view('tokens');
    }
    public function store(Request $request)
    {
        // dd($request->abilities);


        $attributes = request()->validate([
            'title' => 'required|min:3|max:200', 'abilities' => ['required', 'array', Rule::in(['codesnippets:list','codesnippets:create'])]
        ]);

        $token = auth()->user()->createToken($attributes['title'], $attributes['abilities']);

        return view('tokens', [
            'token' => $token->plainTextToken
        ]);
    }
}
