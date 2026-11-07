<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'nama_klien', 'perusahaan', 'testimoni', 'foto', 'rating', 'tampilkan'
    ];

    protected $casts = [
        'tampilkan' => 'boolean',
    ];
}