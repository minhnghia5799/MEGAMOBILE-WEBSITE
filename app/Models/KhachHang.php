<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;

    protected $table ="khachhang";
    protected $primaryKey ='idKhachHang';
    public function DonHang(){
        return $this->hasMany(DonHang::class,'idKhachHang','idKhachHang');
    }
    public function SanPham()
    {
        return $this->belongstoMany(SanPham::class, 'chitietsanpham', 'idKhachHang', 'idSanPham');
    }
}
