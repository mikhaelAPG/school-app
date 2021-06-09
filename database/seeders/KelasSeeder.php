<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_kelas')->insert([
            [
                'kelas' => 'IPA 1',
            ], 
            [
                'kelas' => 'IPA 2',
            ]
        ]);
    }
}
