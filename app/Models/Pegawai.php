<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    // use HasFactory;
    Protected $fillable = [
        'nama',
        'nip',
        'pangkat',
        'jabatan'
    ];

    public function surats()
    {
        return $this->hasMany('App\Model\Kategori', 'kategori_id');
    }
}
