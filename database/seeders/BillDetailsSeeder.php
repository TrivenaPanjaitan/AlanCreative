<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BillDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $billdetaildefault = [
            [
                'name' => 'Cah Tauge',
                'qty' => 1,
                'price' => 15000,
            ],
            [
                'name' => 'Gurame Asam Manis',
                'qty' => 1,
                'price' => 69000,
            ],
            [
                'name' => 'Nasi Putih',
                'qty' => 2,
                'price' => 0,
            ],
            [
                'name' => 'Es Jeruk Nipis',
                'qty' => 2,
                'price' => 20000,
            ],
        ];

        DB::table('bill_details')->insert($billdetaildefault);
    }
}
