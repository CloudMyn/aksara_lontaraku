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
        'gambar',
        'judul',
        'slug',
        'kelas',
        'deskripsi',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Perform actions before creating a new record
            $model->slug = \Illuminate\Support\Str::slug($model->judul);
        });
    }

    public function informasi_pembelajaran()
    {
        return $this->hasMany(InformasiPembelajaran::class);
    }
}
