<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tinggibadan extends Model
{
    use HasFactory;

    protected $fillable = [
        "pasien_id",
        'tinggi_badan',
        'status_tinggi'
    ];

    protected $table = 'tinggibadan';
}
