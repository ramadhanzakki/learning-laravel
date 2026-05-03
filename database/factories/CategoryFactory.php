<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomCategory = $this->faker->unique()->word();

        return [
            'name_category' => $randomCategory,
            'slug' => Str::slug($randomCategory)
        ];
    }
}
