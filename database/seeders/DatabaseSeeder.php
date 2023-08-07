<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PengaduanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Memanggil Seeder
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PengaduanSeeder::class);
    }
}
