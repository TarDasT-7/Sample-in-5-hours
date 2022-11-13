<?php

namespace App\Http\Repositories;

use App\Models\Artist;
use App\Models\Category;
use App\Models\Song;
use Illuminate\Support\Facades\Storage;

class ArtistRepository
{

    private function fileName($name)
    {
        return str_replace(' ', '_', $name);
    }

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
    // --------------------------------

    public function storeArtist($request)
    {
        $artist = Artist::query()->create([
            'name' => $request->name,
            'nick_name' => $request->nick_name,
        ]);

        if($request->hasFile('image'))
        {
            $image      = $request->file('image');
            $fileName   = $this->fileName($request->nick_name).'.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $fileName);
            $artist->update(['image' => $fileName]);
        }
        return ;
    }

    public function updateArtist($request, $id)
    {
        $artist = Artist::query()->findOrFail($id);
        $artist->update([
            'name' => $request->name,
            'nick_name' => $request->nick_name,
        ]);
        if($request->hasFile('image'))
        {
            Storage::disk('public')->delete('images/'.$artist->image);
            $image      = $request->file('image');
            $fileName   = $this->fileName($request->nick_name).'.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $fileName);
            $artist->update(['image' => $fileName]);
        }
        return ;
    }

}
