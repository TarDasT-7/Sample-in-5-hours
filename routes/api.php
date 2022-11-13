<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::resource('category', App\Http\Controllers\V1\Dashboard\CategoryController::class);
Route::resource('song', App\Http\Controllers\V1\Dashboard\SongController::class);
Route::resource('artist', App\Http\Controllers\V1\Dashboard\ArtistController::class);