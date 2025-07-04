<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertyPhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'original_name',
        'generated_name',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}