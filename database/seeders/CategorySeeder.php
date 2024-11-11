<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
         Category::create([
            'name' => 'Makanan',
            'slug' => 'makanan',
            'color' => 'blue'
         ]);
         
         Category::create([
            'name' => 'Minuman',
            'slug' => 'minuman',
            'color' => 'yellow'
         ]);
         
         Category::create([
            'name' => 'Dessert',
            'slug' => 'dessert',
            'color' => 'green'
         ]);
    }
}