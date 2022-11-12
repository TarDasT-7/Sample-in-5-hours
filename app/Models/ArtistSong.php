<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistSong extends Model
{
    use HasFactory;

    protected $fillable= ['artist_id', 'song_id'];
}
