<?php

namespace App\Models;

use App\Traits\SingleRow;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DynamicSetting extends Model
{
    protected $table = 'dynamic_settings';
    protected $guarded = [];
    use SingleRow;
}
