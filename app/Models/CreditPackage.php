<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditPackage extends Model
{
    use SoftDeletes;
    protected $table = 'credit_packages';
    protected $guarded = [];
}
