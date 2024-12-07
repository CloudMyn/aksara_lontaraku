<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriPembelajaran extends Model
{
    /** @use HasFactory<\Database\Factories\MateriPembelajaranFactory> */
    use HasFactory;

    protected $table = 'materi_pembelajaran';

    protected $fillable = [
        'judul',
        'slug',
        'kelas',
        'deskripsi',
    ];
}
