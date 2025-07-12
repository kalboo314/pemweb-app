<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\PropertyPhoto;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

