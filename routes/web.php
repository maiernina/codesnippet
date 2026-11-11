<?php

use App\Http\Controllers\SnippetController;
use App\Http\Controllers\TokenController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');


Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', [SnippetController::class, 'index'])->name('dashboard');

Route::get('/tokens', function () {
    return view('tokens');
})->name('tokens');

Route::post('/tokens', [TokenController::class, 'store'])
    ->name('tokens.store');
