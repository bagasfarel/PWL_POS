<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'Warung Pinggiran',
                'supplier_alamat' => 'Jl. Kembang Mayang No. 11, Surabaya',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'Toko Elektronik Jaya',
                'supplier_alamat' => 'Jl. Cendrawasih No. 20, Malang',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'Toko Pakaian Distro',
                'supplier_alamat' => 'Jl. Kalijaya No. 15, Bandung',
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
