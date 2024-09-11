<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Supplier 1: Warung Pinggiran (Kategori Makanan & Mimuman)
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Chitato',
                'harga_beli' => 10000,
                'harga_jual' => 11000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Sprit',
                'harga_beli' => 5000,
                'harga_jual' => 5500,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Coca-Cola',
                'harga_beli' => 5000,
                'harga_jual' => 5500,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 1,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Coklat Better',
                'harga_beli' => 11000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 1,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Qtela',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ],
        
            // Supplier 2: Toko Elektronik Jaya (Kategori Elektronik)
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'TV Android',
                'harga_beli' => 1000000,
                'harga_jual' => 1100000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Radio',
                'harga_beli' => 100000,
                'harga_jual' => 120000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 2,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Mesin Cuci',
                'harga_beli' => 1000000,
                'harga_jual' => 1200000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 2,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Kulkas',
                'harga_beli' => 1100000,
                'harga_jual' => 1250000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 2,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Blender',
                'harga_beli' => 400000,
                'harga_jual' => 500000,
            ],
        
            // Supplier 3: Toko Pakaian Distro (Kategori Pakaian)
            [
                'barang_id' => 11,
                'kategori_id' => 3,
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Kaos Polos',
                'harga_beli' => 80000,
                'harga_jual' => 100000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 3,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Kemeja Flanel',
                'harga_beli' => 140000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 3,
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Sweater',
                'harga_beli' => 80000,
                'harga_jual' => 100000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 3,
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Jaket Varsity',
                'harga_beli' => 140000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 3,
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Hoodie',
                'harga_beli' => 100000,
                'harga_jual' => 120000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
