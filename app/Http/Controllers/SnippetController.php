<?php

namespace App\Http\Controllers;

use App\Models\snippet;
use Illuminate\Http\Request;

class SnippetController extends Controller
{
    public function index()
    {
        $snippets = snippet::all();
        return view('dashboard', ['snippets' => $snippets]);
    }
    public function show($id)
    {
        $snippet = snippet::findOrFail($id);
        return view('snippetdetail', ['snippet' => $snippet]);
    }
}
