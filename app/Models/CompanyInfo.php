<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    protected $table = 'company_info';
    
    protected $fillable = [
        'nama_perusahaan', 'tentang', 'visi', 'misi', 'alamat', 
        'telepon', 'whatsapp', 'email', 'website',
        'facebook', 'instagram', 'twitter', 'youtube',
        'logo', 'jam_operasional'
    ];
}