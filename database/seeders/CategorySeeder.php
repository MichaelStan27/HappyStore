<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'category' => 'Fiction',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category' => 'Science',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category' => 'Computer',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
