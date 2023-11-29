<?php

namespace Database\Seeders;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Get all categories from the database
        $categories = Category::all();

        // Create 50 random subcategories with random category relationships
        Subcategory::factory()
            ->count(20)
            ->create([
                'category_id' => $categories->random()->id,
            ]);
    }
}
