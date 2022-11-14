<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas =   [

            'fakultas' => 'Teknik dan Desain',
            'prodi' => 'S1 RPL',
            'kelas' => 'S1 RPL',
            'isi' => '75673853',
            'created_at' => new \DateTime,
            'updated_at' => null

            ];

            \DB::table('tabel_kelas')->insert($kelas);
    }
}
