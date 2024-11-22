<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categories::factory()->create([
            'name' => 'Sports',
        ]);
        
        Categories::factory()->create([
            'name' => 'Technology',
        ]);
        
        Categories::factory()->create([
            'name' => 'Politics',
        ]);
    }
}
