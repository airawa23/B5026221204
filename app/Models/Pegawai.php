<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    public $timestamps = false;

    protected $fillable = [
        'pegawai_nama',
        'pegawai_jabatan',
        'pegawai_umur',
        'pegawai_alamat',
    ];
}
