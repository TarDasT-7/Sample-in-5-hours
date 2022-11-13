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
        $fileName = explode(' ',$name);
        $edit = '';
        foreach($fileName as $key=> $item)
        {
            $edit += $item;
            if(count($fileName) < $key + 1)
            {
                $edit += "_";
            }
        }
        return $edit;
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
            Storage::disk('public')->put('images/'.$fileName, $image);
            $artist->query()->update(['name' => $fileName]);
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
            Storage::disk('public')->put('images/'.$fileName, $image);
            $artist->query()->update(['image-' => $fileName]);
        }
        return ;
    }

}
