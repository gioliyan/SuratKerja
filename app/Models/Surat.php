<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    // use HasFactory;
    Protected $fillable = [
        'dasar',
        'pegawai_id',
        'nm_pegawai',
        'nip_pegawai',
        'pangkat_pegawai',
        'jabatan_pegawai',
        'untuk',
        'tujuan_surat',
        'instansi',
        'dari',
        'menuju',
        'transportasi',
        'dari_tanggal',
        'sampai_tanggal',
    ];
}
