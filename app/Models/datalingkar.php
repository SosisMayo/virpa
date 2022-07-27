<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datalingkar extends Model
{
    use HasFactory;

    protected $fillable = [
        "pasien_id",
        "path_gambar",
        "path_gambar_fire",
        'lingkar_kepala',
        'status_lingkar'
    ];

    protected $table = 'datalingkar';

}
