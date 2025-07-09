<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = ['property_id', 'nama', 'alamat', 'catatan'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
