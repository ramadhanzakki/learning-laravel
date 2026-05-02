<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'blogTitle' => fake()->sentence(),
            'author' => fake()->name(),
            'slug' => Str::slug(fake()->sentence()),
            'body' => fake()->text()
        ];
    }
}
