<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('/plaseSeedDataToDatabase',function(){
    $category = \App\Models\Category::first();
    $artist = \App\Models\Song::first();
    $song = \App\Models\Artist::first();
    if(!$category && !$artist && !$song)
    {
        Artisan::call("db:seed");
    }
    return redirect('/');
});

Route::middleware(['hasData'])->group(function () {

    Route::get('/', [App\Http\Controllers\V1\Web\HomeController::class, 'index'])->name('home.index');
    Route::resource('songs', App\Http\Controllers\V1\Web\SongController::class);
    Route::resource('categories', App\Http\Controllers\V1\Web\CategoryController::class);
    Route::resource('artists', App\Http\Controllers\V1\Web\ArtistController::class);

});

