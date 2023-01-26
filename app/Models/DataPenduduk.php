<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenduduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tempat-lahir',
        'tanggal-lahir',
        'jenis-kelamin',
        'agama',
        'alamat',
        'kota',
        'provinsi',
        'pekerjaan',
        'kewarganegaraan',
        'status-pernikahan',
        'pengajuan',
    ];

}
