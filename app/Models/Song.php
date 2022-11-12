<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'cover', 'music', 'time', 'text'];
    protected $appends = ['similars'];


    public function artists()
    {
        return $this->BelongsToMany(Artist::class, 'artist_songs');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getSimilarsAttribute()
    {
        $category = $this->category->id;
        return Song::where('category_id',$category)->where('id','!=',$this->id)->orderBy('created_at','desc')->take(4)->get();
    }
}
