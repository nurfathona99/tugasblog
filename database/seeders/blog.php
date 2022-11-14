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
        $blog =   [

            'author' => 'Chan Ho Kei',
            'title' => 'Second Sister',
            'body' => 'Detektif hacker',
            'keyword' => 'criminal case',
            'created_at' => new \DateTime,
            'updated_at' => null

            ];

            \DB::table('tabel_blog')->insert($blog);
    }
}
