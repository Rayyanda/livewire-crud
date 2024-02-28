<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'uuid',
        'nim',
        'nama',
        'prodi',
        'alamat',
        'ttl',
        'th_masuk',
        'email',
        'fakultas_id',
        'tempat_lahir',
    ];
}
