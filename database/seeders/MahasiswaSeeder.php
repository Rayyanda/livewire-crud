<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //'uuid',
        /*'nim',
        'nama',
        'prodi',
        'alamat',
        'ttl',
        'th_masuk',
        'email',
        'fakultas_id',
        */

        for ($i=0; $i < 10; $i++) { 
            DB::table('mahasiswa')->insert([
                'uuid'=> Str::uuid(),
                'nim'=> '202324000'.$i,
                'nama' => faker::create()->name(),
                'prodi'=> 'Sistem Informasi',
                'alamat'=> faker::create()->address(),
                'ttl' => faker::create()->date(now()),
                'tempat_lahir' => 'Indonesia',
                'th_masuk'=> '2023',
                'email'=> faker::create()->name() . '@email.com',
                'fakultas_id' => 1
            ]);
        }
    }
}
