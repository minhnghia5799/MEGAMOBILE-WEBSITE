<?php
namespace App\Services;

use App\Models\DanhMucSanPham;
use App\Models\KhachHang;
use App\Models\Coupon;
use App\Models\DonHang;
use Illuminate\Http\Request;

class AdminService 
{
    public function HienDanhMuc(){
        return DanhMucSanPham::all();
    }

    public function ThemDanhMucMoi(){
        $data = request()->all();
        $DanhMuc = new DanhMucSanPham();
        $DanhMuc->TenDanhMuc = $data['TenDanhMuc'];
        $DanhMuc->TinhTrang = 'con';
        $DanhMuc->save();
    }

    public function AnDanhMucDaChon($idDanhMuc)
    {
        $DanhMuc = DanhMucSanPham::find($idDanhMuc);
        $DanhMuc->TinhTrang = 'an';
        $DanhMuc->save();
    }

    public function HienKhachHang(){
        return KhachHang::all();
    }

    public function HienCoupon(){
        return Coupon::all();
    }

    public function ThemCouponMoi(){
        $data = request()->all();
        $Coupon = new Coupon();
        $Coupon->MaCoupon = $data['MaCoupon'];
        $Coupon->NgayBD = $data['NgayBD'];
        $Coupon->NgayBD = $data['NgayKT'];
        $Coupon->GiaTri = $data['GiaTri'];
        $Coupon->TinhTrang = 'con hieu luc';
        $Coupon->save();
    }

    public function HienDonHang(){
        return DonHang::all();
    }
}
?>