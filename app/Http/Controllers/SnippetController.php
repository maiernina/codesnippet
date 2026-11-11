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
}
