<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1,10) as $index) {

            \App\Models\ArtistSong::factory()->create([
                'artist_id' => \App\Models\Artist::all()->random()->id,
                'song_id' => \App\Models\Song::all()->random()->id
            ]);
        }

        
    }
}
