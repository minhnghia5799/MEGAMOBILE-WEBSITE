<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminService;

class AdminController extends Controller
{
    //
    public function DanhMuc(){
        $DanhMuc = new AdminService();
        return view('admin/quanlyloaisach')->with('DanhMuc', $DanhMuc->HienDanhMuc());
    }

    public function TaoThemDanhMuc(){
        $DanhMuc = new AdminService();
        $DanhMuc->ThemDanhMucMoi();
        return redirect('admin/quanlyloaisach');
    }
    
    public function AnDanhMuc($idDanhMuc)
    {
        $DanhMuc = new AdminService();
        $DanhMuc->AnDanhMucDaChon($idDanhMuc);
        return redirect('admin/quanlyloaisach');
    }

    //QLKH
    public function KhachHang(){
        $KhachHang = new AdminService();
        return view('admin/quanlykhachhang')->with('KhachHang', $KhachHang->HienKhachHang());
    }

    //QLCP
    public function Coupon(){
        $Coupon = new AdminService();
        return view('admin/quanlycoupon')->with('Coupon', $Coupon->HienCoupon());
    }

    public function TaoThemCoupon(){
        $Coupon = new AdminService();
        $Coupon->ThemCouponMoi();
        return redirect('admin/quanlycoupon');
    }

    //QLĐH
    public function DonHang(){
        $DonHang = new AdminService();
        return view('admin/quanlydonhang')->with('DonHang', $DonHang->HienDonHang());
    }

}

