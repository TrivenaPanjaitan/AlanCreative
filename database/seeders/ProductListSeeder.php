<?php

namespace Database\Seeders;

use App\Models\ProductList;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ProductList = [
            [
                'name' => 'Cumi Tepung',
                'picture' => 'public/images/ProductList/cumi_tepung.jpg',
                'price' => 10000,
            ],
            [
                'name' => 'Cumi Bakar',
                'picture' => 'public/images/ProductList/cumi_bakar.jpg',
                'price' => 10000,
            ],
            [
                'name' => 'Cumi Cabe Goreng',
                'picture' => 'public/images/ProductList/cumi_cabe_goreng.jpg',
                'price' => 10000,
            ],
            [
                'name' => 'Cah Kailan',
                'picture' => 'public/images/ProductList/cah_kailan.jpg',
                'price' => 10000,
            ],
            [
                'name' => 'Tahu Goreng',
                'picture' => 'public/images/ProductList/tahu_goreng.jpg',
                'price' => 10000,
            ],
            [
                'name' => 'Cah Tauge',
                'picture' => 'public/images/ProductList/cah_tauge.jpg',
                'price' => 15000,
            ],
            [
                'name' => 'Kerang Bambu',
                'picture' => 'public/images/ProductList/kerang_bambu.jpg',
                'price' => 10000,
            ],
            [
                'name' => 'Kepiting Padang',
                'picture' => 'public/images/ProductList/kepiting_padang.jpg',
                'price' => 10000,
            ],
            [
                'name' => 'Gurame Asam Manis',
                'picture' => 'public/images/ProductList/gurame_asam_manis.jpg',
                'price' => 69000,
            ],
            [
                'name' => 'Udang Bakar',
                'picture' => 'public/images/ProductList/udang_bakar.jpg',
                'price' => 10000,
            ],
            [
                'name' => 'Udang Saos Tiram',
                'picture' => 'public/images/ProductList/udang_saos_tiram.jpg',
                'price' => 10000,
            ],
            [
                'name' => 'Udang Mayones',
                'picture' => 'public/images/ProductList/udang_mayones.jpg',
                'price' => 10000,
            ],
            [
                'name' => 'Iced Tea',
                'picture' => 'public/images/ProductList/iced_tea.jpg',
                'price' => 10000,
            ],
            [
                'name' => 'Es Jeruk Nipis',
                'picture' => 'public/images/ProductList/es_jeruk_nipis.jpg',
                'price' => 10000,
            ],
            [
                'name' => 'Nasi Putih',
                'picture' => 'public/images/ProductList/nasi_putih.jpg',
                'price' => 0,
            ],
        ];

        DB::table('product_lists')->insert($ProductList);
    }
}
