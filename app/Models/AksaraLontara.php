<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AksaraLontara extends Model
{
    /** @use HasFactory<\Database\Factories\AksaraLontaraFactory> */
    use HasFactory;

    protected $table = 'aksara_lontaras';

    protected $fillable = [
        'nama_aksara',
        'kode_aksara',
        'bunyi_aksara',
        'urutan',
    ];
}
