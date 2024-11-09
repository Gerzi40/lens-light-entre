<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Video',
        ]);
        Category::create([
            'name' => 'Photo',
        ]);
        Category::create([
            'name' => 'Photo and Video',
        ]);
        Category::create([
            'name' => 'Animation Video',
        ]);
        
    }
}
