<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama_barang'=>'Ayam Goreng', 'merk'=>'KFC', 'harga'=>'20000'],
            ['nama_barang'=>'Soda', 'merk'=>'CocaCola', 'harga'=>'8000'],
            ['nama_barang'=>'Mie Instan', 'merk'=>'Indomie', 'harga'=>'4000'],
            ['nama_barang'=>'Air Mineral', 'merk'=>'Aqua', 'harga'=>'5000'],
            ['nama_barang'=>'Keju', 'merk'=>'Craft', 'harga'=>'10000']
        ];
        DB::table('barangs')->insert($barang);
    }
}
