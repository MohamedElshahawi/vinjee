<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subcategory;
use App\Models\Category;

class SubcategoryFactory extends Factory
{
    protected $model = Subcategory::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            // 'category_id' will be set in the seeder
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Subcategory $subcategory) {
            $category = Category::inRandomOrder()->first();
            $subcategory->category()->associate($category)->save();
        });
    }
}
