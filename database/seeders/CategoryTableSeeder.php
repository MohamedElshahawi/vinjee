<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategoryTableSeeder extends Seeder
{

    public function run()
    {
        // // Use Eloquent to create categories
        // Category::create(['name' => 'Category 1']);
        // Category::create(['name' => 'Category 2']);
        $categories = [
            'CLOTHING',
            'JEANS',
            'BAGS',
            'ACCESSORIES',
            'SHOES',
         ];

         foreach ($categories as $category) {
              Category::create(['name' => $category]);
         }
    }

}
