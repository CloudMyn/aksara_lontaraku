<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluasi extends Model
{
    /** @use HasFactory<\Database\Factories\EvaluasiFactory> */
    use HasFactory;

    protected $table = 'evaluasi';

    protected $fillable = [
        'score',
        'video_pembelajaran_id',
        'informasi_pembelajaran_id',
        'kuis_soal_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function video_pembelajaran()
    {
        return $this->belongsTo(VideoPembelajaran::class);
    }

    public function informasi_pembelajaran()
    {
        return $this->belongsTo(InformasiPembelajaran::class);
    }
}
