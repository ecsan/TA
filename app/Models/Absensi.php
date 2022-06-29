<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = "absensipegawai";

    public $timestamps = false;
    protected $fillable = [
        'name',
        'uid',
        'id',
        'id_admin',
        'name',
        'email',
        'nama_lengkap',
        'selfie_masuk',
        'selfie_pulang',
        'tanggal',
        'lokasi',
        'jam_masuk',
        'jam_pulang',
        'jam_kerja',
        'keterangan'
    ];
}
