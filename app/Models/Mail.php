<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    // use HasFactory;

    Protected $fillable = [
        'surat_dari',
        'tertanggal',
        'nomor_surat',
        'perihal',
        'pembuka',
        'isi_surat',
        'tanggal',
        'tujuan_surat',
        'pembayaran',
        'angkutan',
        'berangkat',
        'tujuan',
        'tgl_berangkat',
        'tgl_kembali',
        'instansi_ang',
        'mata_ang',
        'keterangan',
        'acuan_konsep',
        'operator'
    ];

}
