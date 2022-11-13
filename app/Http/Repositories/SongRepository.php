<?php

namespace App\Http\Repositories;

use App\Models\ArtistSong;
use App\Models\Song;
use Illuminate\Support\Facades\Storage;
use MP3File;

class SongRepository
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

    public function songs()
    {
        return Song::orderBy('created_at', 'desc')->get();
    }

    public function findSong($id)
    {
        return Song::query()->findOrFail($id);
    }

    // --------------------

    public function storeSong($request)
    {
        $song = Song::query()->create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'text' => $request->text
        ]);

        if($request->hasFile('cover'))
        {
            $image      = $request->file('cover');
            $fileName   = $this->fileName($request->name).'.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put('images/'.$fileName, $image);
            $song->query()->update(['cover' => $fileName]);
        }

        if($request->hasFile('music'))
        {
            $sound      = $request->file('music');
            $fileName   = $this->fileName($request->name).'.' . $sound->getClientOriginalExtension();
            Storage::disk('public')->put('sounds/'.$fileName, $sound);

            $mp3file = new MP3File($fileName);
            $time = MP3File::formatTime($mp3file->getDuration());
            $song->query()->update(['music' => $fileName,'time'=>$time]);
        }

        if($song)
            foreach($request->artists as $artist)
            ArtistSong::query()->create([
                'song_id' => $song->id,
                'artist_id' => $artist,
            ]);
        
        return ;
    }

    public function updateSong($request,$id)
    {
        $song = Song::query()->findOrFail($id);
        $song->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'text' => $request->text
        ]);

        if($request->hasFile('cover'))
        {
            Storage::disk('public')->delete('images/'.$song->cover);
            $image      = $request->file('cover');
            $fileName   = $this->fileName($request->name).'.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put('images/'.$fileName, $image);
            $song->query()->update(['cover' => $fileName]);
        }

        if($request->hasFile('music'))
        {
            Storage::disk('public')->delete('sounds/'.$song->music);
            $sound      = $request->file('music');
            $fileName   = $this->fileName($request->name).'.' . $sound->getClientOriginalExtension();
            Storage::disk('public')->put('sounds/'.$fileName, $sound);

            $mp3file = new MP3File($fileName);
            $time = MP3File::formatTime($mp3file->getDuration());
            $song->query()->update(['music' => $fileName,'time'=>$time]);
        }


        foreach($request->artists as $artist)
            ArtistSong::query()->updateOrCreate([
                'song_id' => $id,
                'artist_id' => $artist,
            ]);
            
        return ;
    }


}
