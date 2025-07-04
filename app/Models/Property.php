<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipe_bangunan',
        'luas_bangunan',
        'luas_tanah',
        'lokasi',
        'judul',
        'deskripsi',
        'harga',
        'sertifikat_original_name',
        'sertifikat_generate_name',
    ];

    public function photos()
    {
        return $this->hasMany(PropertyPhoto::class);
    }

}

