<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'icon',
        'gambar',
        'urutan',
        'aktif',
        'link'
    ];

    protected $casts = [
        'aktif' => 'boolean',
    ];
}
