<?php

namespace App\Repositories;

use App\Models\Artist;
use App\Models\Category;
use App\Models\Song;

class HomeRepository
{


    public function topSongs()
    {
        return Song::orderBy('created_at', 'desc')->take(4)->get();
    }

    public function topCategories()
    {
        return Category::orderBy('created_at', 'desc')->take(6)->get();
    }

    public function topArtists()
    {
        return Artist::orderBy('created_at', 'desc')->take(4)->get();
    }
}
