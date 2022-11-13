<?php

namespace App\Repositories;

use App\Models\Artist;
use App\Models\Category;
use App\Models\Song;

class ArtistRepository
{


    public function artist($id)
    {
        return Artist::query()->findOrFail($id);
    }

    public function artists()
    {
        return Artist::orderBy('created_at', 'desc')->get();
    }

    public function songs($id)
    {
        return Artist::query()->findOrFail($id)->songs;
    }

}
