<?php

use App\Http\Controllers\SnippetController;
use App\Http\Controllers\TokenController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');


Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', [SnippetController::class, 'index'])->name('dashboard');

Route::get('/tokens', [TokenController::class, 'index'])->middleware(['auth:sanctum'])
    ->name('tokens.index');

Route::post('/tokens', [TokenController::class, 'store'])->middleware(['auth:sanctum'])
    ->name('tokens.store');

Route::get('/snippet/{id}', [SnippetController::class, 'show'])->middleware(['auth:sanctum'])->name('snippet.show');
