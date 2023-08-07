<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengaduan;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaduan::create([
            'tgl_pengaduan' => date('Y-m-d h:i:s'),
            'user_id' => '3',
            'isi_laporan' => 'Di Jalur Jagaraksa Terdapat jalan yang berlubang',
            'foto' => 'images/1618809070.jpg',
            'status' => '0',
        ]);

        Pengaduan::create([
            'tgl_pengaduan' => date('Y-m-d h:i:s'),
            'user_id' => '3',
            'isi_laporan' => 'Di Jalur Jagaraksa Terdapat jalan yang berlubang',
            'foto' => 'images/1618796916.jpg',
            'status' => '0',
        ]);

        Pengaduan::create([
            'tgl_pengaduan' => date('Y-m-d h:i:s'),
            'user_id' => '1',
            'isi_laporan' => 'Di Jalur Jagaraksa Terdapat jalan yang berlubang',
            'foto' => 'images/1618796916.jpg',
            'status' => '0',
        ]);

        Pengaduan::create([
            'tgl_pengaduan' => date('Y-m-d h:i:s'),
            'user_id' => '1',
            'isi_laporan' => 'Di Jalur Jagaraksa Terdapat jalan yang berlubang',
            'foto' => 'images/1618770615.jpg',
            'status' => '0',
        ]);
    }
}
