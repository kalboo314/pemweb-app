<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Property;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
    'name', 
    'email', 
    'password', 
    'bio', 
    'phone', 
    'instagram', 
    'profile_photo', 
    'profile_photo_original',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function properties()
    {
        return $this->hasMany(\App\Models\Property::class);
    }

    public function isAdmin()
    {
        return $this->is_admin;
    }

}