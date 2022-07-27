<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beratbadan extends Model
{
    use HasFactory;

    protected $fillable = [
        "pasien_id",
        'berat_badan',
        'status_berat'
    ];

    protected $table = 'beratbadan';
}
