<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call Categories and User
        $this->call([CategorySeeder::class, UserSeeder::class]);

        // Create blogs with existing categories and users
        Blog::factory(50)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
