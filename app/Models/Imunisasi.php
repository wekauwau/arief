<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'usia_saat_vaksin',
        'tinggi',
        'berat',
        'periode',
        'vaksins_id',
        'data_anaks_id',
        'data_ibus_id',
    ];
}
