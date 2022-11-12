<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['name','nick_name','image','biography'];

    public function songs()
    {
        return $this->BelongsToMany(Song::class, 'artist_songs');
    }
}
