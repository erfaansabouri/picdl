<?php

namespace App\Models;

use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $guarded = [];

    public function getShamsiCreatedAtAttribute()
    {
        if($this->created_at)
            return Verta::instance($this->created_at)->format('Y-n-j H:i:s');
        return null;
    }
}
