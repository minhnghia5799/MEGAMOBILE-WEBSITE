<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $table ="coupon";
    protected $primaryKey ='MaCoupon';
    protected $keyType = 'string';
    public function DonHang(){
        return $this->hasMany(DonHang::class,'Coupon','MaCoupon');
    }
}
