<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [];
    protected $hidden = [
        'otp',
        'password',
        'remember_token',
    ];

    public function getProfileNameAttribute()
    {
        if(!empty($this->full_name))
            return $this->full_name;
        return $this->phone_number;
    }

}
