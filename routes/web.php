<?php

use App\Http\Controllers\SnippetController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');


Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', [SnippetController::class, 'index'])->name('dashboard');

Route::get('/dashboard', function(){
})->name('dashboard');
