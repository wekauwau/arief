<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataIbu extends Model
{
    use HasFactory;

    protected $table = "data_ibuses";

    protected $fillable = [
        'nama',
        'nik',
        'alamat',
        'nomor',
        'password',
    ];
}
