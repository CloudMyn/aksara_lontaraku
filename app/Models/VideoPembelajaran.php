<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoPembelajaran extends Model
{
    /** @use HasFactory<\Database\Factories\VideoPembelajaranFactory> */
    use HasFactory;

    protected $table = 'video_pembelajaran';

    protected $fillable = [
        'gambar',
        'judul',
        'slug',
        'deskripsi',
        'durasi',
        'video',
    ];
}
