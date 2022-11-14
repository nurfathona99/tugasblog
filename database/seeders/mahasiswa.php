<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa =   [

        'nim' => '4567253',
        'nama' => 'Anna',
        'jurusan' => 'S1 RPL',
        'prodi' => 'Teknik',
        'created_at' => new \DateTime,
        'updated_at' => null

        ];

        \DB::table('mahasiswa')->insert($mahasiswa);

    }
}
