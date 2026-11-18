<?php

use App\Http\Controllers\RestsnippetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// create token: 7|eGgJm0j62sl6YGvxbQMOkDMaBl5gGEb7XGIuj1cb9867869b
// list token: 10|yByUBeNd9G55FR1KWZiBa6st0txYXsXTEigZNfZF131a423b
// wow: 12|JiGDf0wvZbM58a1JciHiEzvMUvpGUuK5YCVlI4GWc34d83d0
Route::get('/codesnippets', [RestsnippetController::class, 'index'])
    ->middleware(['auth:sanctum', 'abilities:codesnippets:list']);

Route::post('/codesnippets', [RestsnippetController::class, 'store'])
    ->middleware(['auth:sanctum', 'abilities:codesnippets:create']);
