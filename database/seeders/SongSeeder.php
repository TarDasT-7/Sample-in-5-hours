<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Song::factory()->create([
            'name' => 'Hail Mary',
            'category_id' =>\App\Models\Category::all()->random()->id,
            'time' => '3:20',
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'Lose Yourself',
            'category_id' =>\App\Models\Category::all()->random()->id,
            'time' => '3:20',
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'Live From The Gutter',
            'category_id' =>\App\Models\Category::all()->random()->id,
            'time' => '3:20',
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'First Class',
            'category_id' =>\App\Models\Category::all()->random()->id,
            'time' => '3:20',
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'In A Minute',
            'category_id' =>\App\Models\Category::all()->random()->id,
            'time' => '3:20',
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'Lili',
            'category_id' =>\App\Models\Category::all()->random()->id,
            'time' => '3:20',
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'Sum 2 Prove',
            'category_id' =>\App\Models\Category::all()->random()->id,
            'time' => '3:20',
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'Over Heated',
            'category_id' =>\App\Models\Category::all()->random()->id,
            'time' => '3:20',
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'Cant You See',
            'category_id' =>\App\Models\Category::all()->random()->id,
            'time' => '3:20',
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'Free',
            'category_id' =>\App\Models\Category::all()->random()->id,
            'time' => '3:20',
        ]);
    }
}