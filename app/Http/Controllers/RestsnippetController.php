<?php

namespace App\Http\Controllers;

use App\Models\snippet;
use Illuminate\Http\Request;

class RestsnippetController extends Controller
{
    public function index()
    {
        $snippets = snippet::all();
        return [
            'success' => true,
            'snippets' => $snippets
        ];
    }
    public function store(){
        $attributes = request()->validate([
            'title'=>'required|min:1|max:100',
            'code' => 'required|string'
        ]);

        $codesnippet = snippet::create($attributes);
        return['success' => true, 'codesnippet'=>$codesnippet];
    }

    public function random()
    {
        $snippetcollection = snippet::all();
        $snippet =$snippetcollection->random();

        return [
            'success' => true,
            'snippet' => $snippet
        ];

    }
}
