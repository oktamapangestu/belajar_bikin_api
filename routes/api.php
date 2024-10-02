<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);

Route::post('/persegi', [App\Http\Controllers\Api\PersegiController::class, 'hitungPersegi']);
