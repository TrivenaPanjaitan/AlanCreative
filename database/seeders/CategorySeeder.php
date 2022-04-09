<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'category' => 'Cumi & Kerang',
                'picture' => 'public/images/Category/cumi_n_kerang.png'
            ],
            [
                'category' => 'Sayuran',
                'picture' => 'public/images/Category/sayuran.png'
            ],
            [
                'category' => 'Ikan',
                'picture' => 'public/images/Category/ikan.png'
            ],
            [
                'category' => 'Minuman',
                'picture' => 'public/images/Category/minuman.png'
            ],
            [
                'category' => 'Happy Hour',
                'picture' => 'public/images/Category/happy_hour.jpg'
            ],
        ];

        DB::table('categories')->insert($category);
    }
}
