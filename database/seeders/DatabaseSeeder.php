<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Foundation\Auth\User;
use Database\Seeders\ProductListSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ProductListSeeder::class,
            CategorySeeder::class,
            BillDefaultSeeder::class,
            BillDetailsSeeder::class,
        ]);
    }
}
