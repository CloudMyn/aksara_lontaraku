<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuisSoal extends Model
{
    /** @use HasFactory<\Database\Factories\KuisSoalFactory> */
    use HasFactory;

    protected $table = 'kuis_soal';

    protected $fillable = [
        'soal',
        'pilihan_a',
        'pilihan_b',
        'pilihan_c',
        'pilihan_d',
        'jawaban',
        'video_pembelajaran_id',
    ];

    public function video_pembelajaran()
    {
        return $this->belongsTo(VideoPembelajaran::class);
    }

}
