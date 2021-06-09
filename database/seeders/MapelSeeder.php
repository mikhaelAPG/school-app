<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_mapel')->insert([
            [
                'mapel' => 'IPA',
            ], 
            [
                'mapel' => 'IPS',
            ]
        ]);
    }
}
