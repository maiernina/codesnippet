<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function index()
    {
        return view('tokens');
    }
    public function store(Request $request)
    {
        $token = auth()->user()->createToken(
            $request->title
        );

        return view('tokens', [
            'token' => $token->plainTextToken
        ]);
    }
}
