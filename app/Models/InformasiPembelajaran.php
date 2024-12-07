<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPembelajaran extends Model
{
    /** @use HasFactory<\Database\Factories\InformasiPembelajaranFactory> */
    use HasFactory;

    protected $table = 'informasi_pembelajaran';

    protected $fillable = [
        'gambar',
        'judul',
        'slug',
        'deskripsi',
    ];
}
