<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create categories
        $categoriesFix = ['Web Programming', 'Artificial Inteligence', 'Blockcain and Web3'];

        $categories = Category::factory()
            ->count(count($categoriesFix))
            ->sequence(fn ($sequence) => [
                'name_category' => $categoriesFix[$sequence->index],
                'slug' => Str::slug($categoriesFix[$sequence->index])
            ])
            ->create();

        // Create users
        $users = User::factory(10)->create();

        // Create blogs with existing categories and users
        Blog::factory(50)->create(function () use ($categories, $users) {
            return [
                'category_id' => $categories->random(),
                'author_id' => $users->random(),
            ];
        });

        // Create a test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
