<?php

namespace App\Models;

use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $guarded = [];

    const STATUSES = [
        'در انتظار پرداخت' => 'در انتظار پرداخت',
        'پرداخت شده' => 'پرداخت شده',
        'خطا در اتصال به درگاه' => 'خطا در اتصال به درگاه',
        'پرداخت نا موفق' => 'پرداخت نا موفق',
    ];

    public function creditPackage()
    {
        return $this->belongsTo(CreditPackage::class,'credit_package_id','id');
    }

    public function getShamsiCreatedAtAttribute()
    {
        if($this->created_at)
            return Verta::instance($this->created_at)->format('Y-n-j H:i:s');
        return null;
    }

    public function getShamsiPaidAtAttribute()
    {
        if($this->paid_at)
            return Verta::instance($this->paid_at)->format('Y-n-j H:i:s');
        return null;
    }
}
