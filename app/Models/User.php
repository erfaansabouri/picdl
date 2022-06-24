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
    const IRAN_PHONE_NUMBER_REGEX = "/^09(1[0-9]|9[0-2]|2[0-2]|0[1-5]|41|3[0,3,5-9])\d{7}$/";
    public function getProfileNameAttribute()
    {
        if(!empty($this->full_name))
            return $this->full_name;
        return $this->phone_number;
    }

}
