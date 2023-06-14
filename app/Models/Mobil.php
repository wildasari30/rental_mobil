<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = "mobils";

    protected $fillable = [
        'nama_mobil',
        'cc',
        'tahun_mobil',
        'warna',
        'warna_polisi',
        'merk_id',
        'tipe_mobil-id'
    ];
}