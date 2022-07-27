<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "jenis_kelamin",
        "umur",
        "ttl",
        "tanggal_masuk"
    ];

    protected $table = 'pasien';
}
