<?php

namespace App\Repositories;

use App\Models\Song;

class SongRepository
{

    public function songs()
    {
        return Song::orderBy('created_at', 'desc')->get();
    }

    public function findSong($id)
    {
        return Song::query()->findOrFail($id);
    }


}
