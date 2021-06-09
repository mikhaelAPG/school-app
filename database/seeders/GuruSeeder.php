<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_guru')->insert([
            [
                'nip' => '11111',
                'nama_guru' => 'Budi',
                'mapel' => 'Fisika',
                'foto_guru' => 'foto.jpg',
            ], 
            [
                'nip' => '22222',
                'nama_guru' => 'Bokir',
                'mapel' => 'Kimia',
                'foto_guru' => 'foto1.jpg',
            ]
        ]);
    }
}
