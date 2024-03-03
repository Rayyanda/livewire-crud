<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert([
            [
                'nama' => 'Sistem  Informasi',
                'fakultas_id' => 1,
            ],
            [
                'nama' => 'Teknik Informatika',
                'fakultas_id' =>1
            ],
            [
                'nama'=>'Manajemen Bisnis',
                'fakultas_id'=>3
            ]
        ]);
    }
}
