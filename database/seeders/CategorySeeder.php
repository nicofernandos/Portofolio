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
        Category::create([
            'name' => 'Website',
            'slug' => 'websites',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux',
            'color' => 'blue'
        ]);
        
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Data Analyst',
            'slug' => 'data-analyst',
            'color' => 'yellow'
        ]);

        Category::create([
            'name' => 'Editor Video',
            'slug' => 'editor-video',
            'color' => 'sky'
        ]);
    }
}