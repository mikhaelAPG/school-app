<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GuruSeeder::class,
            KelasSeeder::class,
            MapelSeeder::class,
            PenjualanSeeder::class,
            UserSeeder::class,
        ]);
    }
}
