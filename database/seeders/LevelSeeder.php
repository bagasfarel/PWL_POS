<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['level_id' => 1, 'leve_kode' => 'ADM', 'level_nama' => 'Administrator'],
            ['level_id' => 2, 'leve_kode' => 'MNG', 'level_nama' => 'Manager' ],
            ['level_id' => 3, 'leve_kode' => 'STF', 'level_nama' => 'Staff/Kasir' ],
        ];
        DB::table('m_level')->insert($data);
    }
}
