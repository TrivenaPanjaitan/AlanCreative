<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BillDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $billdefault = [
            [
                'subtotal' => 104000,
                'total' => 104000,
            ]
        ];

        DB::table('bills')->insert($billdefault);
    }
}
