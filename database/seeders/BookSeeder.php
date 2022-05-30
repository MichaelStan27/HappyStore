<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::insert([
            [
                'category_id' => 1,
                'title' => 'Sihir Mesir Ditanah Jawa',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Once (And For All) Around The Sun',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Keep Up with Us!',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Psychic Detective Yakumo 1 : The Red Eye Knows',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 2,
                'title' => 'Hutan Rakyat: Fenomenologi Adaptasi Budaya Masyarakat',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 2,
                'title' => 'Kesehatan Masyarakat: Penataan Bantaran Sungai',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 2,
                'title' => 'Pengantar Psikologi Sosial',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 2,
                'title' => 'Metodologi Penelitian Posthumanologi Sastra',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'Novel Snow Dancer',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'title' => 'TeenLit: Vision',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 2,
                'title' => 'Pengantar Kimia Analitik Modern - Metode&Aplikasi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 2,
                'title' => 'Ng Almanac 2020 (Sc)',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => 'Atur Duitmu!',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'title' => 'Kiat Jitu Menjadi Best Seller',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
