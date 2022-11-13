<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use PhpParser\Node\Stmt\Foreach_;

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
        
        $likeCategory = Song::where('category_id',$category)->where('id','!=',$this->id)->orderBy('created_at','desc')->take(2)->get();

        $unique = array();

        foreach($this->artists as $artist)
            foreach($artist->songs as $song)
                if(count($unique) < 2 && $this->id != $song->id)
                    array_push($unique, $song);

        foreach($likeCategory as $like)
            if(!in_array($like, $unique) && $like->id != $this->id)
                array_push($unique, $like);

        return $unique;
    }
}
