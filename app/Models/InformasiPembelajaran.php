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
        'materi_pembelajaran_id',
    ];

    public function materi_pembelajaran()
    {
        return $this->belongsTo(MateriPembelajaran::class);
    }
}
