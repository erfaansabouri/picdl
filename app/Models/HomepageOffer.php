<?php

namespace App\Models;

use App\Traits\HasFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomepageOffer extends Model
{
    use HasFile;
    protected $table = 'homepage_offers';
    protected $guarded = [];
}
