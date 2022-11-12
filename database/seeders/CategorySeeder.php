<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::factory()->create(['title' => 'Hip-Hop']);
        \App\Models\Category::factory()->create(['title' => 'Rap']);
        \App\Models\Category::factory()->create(['title' => 'Rhythm and blues(R&B)']);
        \App\Models\Category::factory()->create(['title' => 'Soul']);
        \App\Models\Category::factory()->create(['title' => 'Rock']);
        \App\Models\Category::factory()->create(['title' => 'Metal']);
        \App\Models\Category::factory()->create(['title' => 'Jazz']);
        \App\Models\Category::factory()->create(['title' => 'Dark']);
        \App\Models\Category::factory()->create(['title' => 'pop']);
        \App\Models\Category::factory()->create(['title' => 'Relax']);
    }
}
