<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 101,
                'kategori_nama' => 'Makanan & Minuman',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 102,
                'kategori_nama' => 'Peralatan Elektronik',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 103,
                'kategori_nama' => 'Pakaian',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 104,
                'kategori_nama' => 'Sepatu',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 105,
                'kategori_nama' => 'Kesehatan & Kecantikan',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
