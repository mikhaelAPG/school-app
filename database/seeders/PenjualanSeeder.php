<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_penjualan')->insert([
            [
                'no_faktur' => 'F00001',
                'pelanggan' => 'Pelanggan 1',
                'tanggal' => '2000-01-01',
                'total' => 1000000,
            ], 
            [
                'no_faktur' => 'F00002',
                'pelanggan' => 'Pelanggan 2',
                'tanggal' => '2000-01-01',
                'total' => 1000000,
            ], 
            [
                'no_faktur' => 'F00003',
                'pelanggan' => 'Pelanggan 3',
                'tanggal' => '2000-01-01',
                'total' => 1000000,
            ], 
            [
                'no_faktur' => 'F00004',
                'pelanggan' => 'Pelanggan 4',
                'tanggal' => '2000-01-01',
                'total' => 2000000,
            ], 
            [
                'no_faktur' => 'F00005',
                'pelanggan' => 'Pelanggan 5',
                'tanggal' => '2000-01-01',
                'total' => 550000,
            ], 
        ]);
    }
}
