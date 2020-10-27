<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $table = "sanpham";
    public function DanhMucSanPham()
    {
        return $this->belongsTo(DanhMucSanPham::class,'idDanhMuc','DanhMuc');
    }
    public function KhachHang()
    {
        return $this->belongstoMany(KhachHang::class, 'chitietsanpham', 'idSanPham', 'idKhachHang');
    }
    public function DonHang()
    {
        return $this->belongstoMany(DonHang::class, 'chitiethoadon', 'idSanPham', 'idDonHang');
    }
}
