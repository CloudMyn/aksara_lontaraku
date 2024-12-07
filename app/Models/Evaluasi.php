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
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
