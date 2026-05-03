<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriesFix = ['Web Programming', 'Artificial Inteligence', 'Blockcain and Web3'];

        Category::factory()
            ->count(count($categoriesFix))
            ->sequence(fn ($sequence) => [
                'name_category' => $categoriesFix[$sequence->index],
                'slug' => Str::slug($categoriesFix[$sequence->index])
            ])
            ->create();
    }
}
