<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Untuk Admin
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'identity_number' => '123456789012345678',
            'username' => 'admin',
            'phone' =>'085715111020',
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole('admin');

        // Untuk Petugas
        $petugas = User::create([
            'name' => 'Petugas',
            'email' => 'petugas@email.com',
            'identity_number' => '123456789012345679',
            'username' => 'petugas',
            'phone' =>'085695467990',
            'password' => bcrypt('password'),
        ]);

        $petugas->assignRole('petugas');

        // Untuk Masyarakat
        $masyarakat = User::create([
            'name' => 'Masyarakat',
            'email' => 'user@email.com',
            'identity_number' => '1234567890123456',
            'username' => 'masyarakat',
            'phone' =>'085695467990',
            'password' => bcrypt('password'),
        ]);

        $masyarakat->assignRole('masyarakat');
    }
}
