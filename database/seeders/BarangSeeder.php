<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            'nama' => 'Lux',
            'tipe' => 'Sabun',
            'tanggal_pemesanan' => '2023/05/01',
            'experied' => '2024/05/01'
        ]);
    }
}
