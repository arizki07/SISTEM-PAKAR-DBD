<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UlasanModel extends Model
{
    use HasFactory;
    protected $table = 'tb_ulasan';
    protected $fillable = [
        'nama',
        'umur',
        'alamat',
        'rating',
        'ulasan',
    ];
}
