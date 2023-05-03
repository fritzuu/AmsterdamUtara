<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert([
            'judul'=> 'Ronald Burung shoebill',
            'penulis'=> 'Revan',
            'harga'=> '999999',
            'tgl_terbit'=> '28-03-2023',
            'created_at'=>date('Y-m-d H:i:s')

        ]);
    }
}
