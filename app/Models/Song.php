<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id','cover', 'music', 'time', 'text'];


    public function artists()
    {
        return $this->BelongsToMany(Artist::class, 'artist_songs');
    }

}
