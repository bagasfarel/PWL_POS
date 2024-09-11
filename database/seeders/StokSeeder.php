<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Supplier 1: Warung Pinggiran (handled by user 1: admin)
            [
                'stok_id' => 1,
                'supplier_id' => 1,
                'barang_id' => 1, // Chitato
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 20,
            ],
            [
                'stok_id' => 2,
                'supplier_id' => 1,
                'barang_id' => 2, // Sprit
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 30,
            ],
            [
                'stok_id' => 3,
                'supplier_id' => 1,
                'barang_id' => 3, // Coca-Cola
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 40,
            ],
            [
                'stok_id' => 4,
                'supplier_id' => 1,
                'barang_id' => 4, // Coklat Better
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 40,
            ],
            [
                'stok_id' => 5,
                'supplier_id' => 1,
                'barang_id' => 5, // Qtela
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 20,
            ],
        
            // Supplier 2: Toko Elektronik Jaya (handled by user 2: manager)
            [
                'stok_id' => 6,
                'supplier_id' => 2,
                'barang_id' => 6, // Tv Android
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 10,
            ],
            [
                'stok_id' => 7,
                'supplier_id' => 2,
                'barang_id' => 7, // Radio
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 15,
            ],
            [
                'stok_id' => 8,
                'supplier_id' => 2,
                'barang_id' => 8, // Mesin Cuci
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 10,
            ],
            [
                'stok_id' => 9,
                'supplier_id' => 2,
                'barang_id' => 9, // Kulkas
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 20,
            ],
            [
                'stok_id' => 10,
                'supplier_id' => 2,
                'barang_id' => 10, // Blender
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 25,
            ],
        
            // Supplier 3: Toko Pakain Distro (handled by user 3: staff)
            [
                'stok_id' => 11,
                'supplier_id' => 3,
                'barang_id' => 11, // Kaos Polos
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 200,
            ],
            [
                'stok_id' => 12,
                'supplier_id' => 3,
                'barang_id' => 12, // Kemeja Flanel
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 150,
            ],
            [
                'stok_id' => 13,
                'supplier_id' => 3,
                'barang_id' => 13, // Sweater
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 100,
            ],
            [
                'stok_id' => 14,
                'supplier_id' => 3,
                'barang_id' => 14, // Jaket Varsity
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 100,
            ],
            [
                'stok_id' => 15,
                'supplier_id' => 3,
                'barang_id' => 15, // Hoodie
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 120,
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
