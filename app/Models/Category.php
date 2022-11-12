<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title'];
    protected $appends = ['count_song'];

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
    
    public function getCountSongAttribute()
    {
        return $this->songs->count();

    }
}
