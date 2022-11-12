<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Artist::factory()->create(['name' => 'Tupac Amaru Shakur','nick_name' => 'Tupac','image'=>'Tupac.jpg']);
        \App\Models\Artist::factory()->create(['name' => 'Marshall Bruce Mathers III','nick_name' => 'Eminem','image'=>'Eminem.jpg']);
        \App\Models\Artist::factory()->create(['name' => 'Aubrey Drake','nick_name' => 'Drake','image'=>'Drake.jpg']);
        \App\Models\Artist::factory()->create(['name' => 'Billie Eilish','nick_name' => 'Billie','image'=>'Billie.jpg']);
        \App\Models\Artist::factory()->create(['name' => 'Dominique Armani Jones','nick_name' => 'Lil Baby','image'=>'LilBaby.jpg']);
    }
}
