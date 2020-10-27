<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;

    protected $table ="donhang";
    public function Coupon()
    {
        return $this->belongsTo(Coupon::class,'MaCoupon','Coupon');
    }
    public function KhachHang(){
        return $this->belongsTo(KhachHang::class,'idKhachHang','idKhachHang');
    }
    public function SanPham()
    {
        return $this->belongstoMany(DonHang::class, 'chitiethoadon', 'idDonHang', 'idSanPham');
    }
}
