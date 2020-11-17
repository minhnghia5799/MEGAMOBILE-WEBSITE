<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminService;

class AdminController extends Controller
{
    public function index()
    {
        //return $this->danhMuc();
        $DanhMuc = new AdminService();
        return view('admin/danhmuc')->with('DanhMuc', $DanhMuc->HienDanhMuc());
    }


    // ---------- Danh Muc ----------
    // All
    public function danhMuc()
    {
        $DanhMuc = new AdminService();
        return view('admin/danhmuc')->with('DanhMuc', $DanhMuc->HienDanhMuc());
    }
    // Insert
    public function insertDanhMuc()
    {
        $DanhMuc = new AdminService();
        $DanhMuc->ThemDanhMucMoi();
        return redirect('admin/danhmuc');
    }
    // Hidden
    public function hiddenDanhMuc($id)
    {
        $DanhMuc = new AdminService();
        $SanPham = new AdminService();
        $DanhMuc->AnDanhMucDaChon($id);
        $DanhSachSanPham = $SanPham->LaySanPhamTheoDanhMuc($id);
        foreach ($DanhSachSanPham as $key => $value) {
            # code...
            $SanPham->AnSanPhamDaChon($value->idSanPham);
        }
        return redirect('admin/danhmuc');
    }


    // ---------- Khach Hang ----------
    // All
    public function khachHang()
    {
        $KhachHang = new AdminService();
        return view('admin/khachhang')->with('KhachHang', $KhachHang->HienKhachHang());
    }


    // ---------- Coupon ----------
    // All
    public function coupon()
    {
        $Coupon = new AdminService();
        return view('admin/coupon')->with('Coupon', $Coupon->HienCoupon());
    }
    // Insert
    public function insertCoupon()
    {
        $Coupon = new AdminService();
        $Coupon->ThemCouponMoi();
        return redirect('admin/coupon');
    }
    // Hidden
    public function hiddenCoupon($id)
    {
        $Coupon = new AdminService();
        $Coupon->AnCouponDaChon($id);
        return redirect('admin/coupon');
    }


    // ---------- Don Hang ----------
    // All
    public function donHang()
    {
        $DonHang = new AdminService();
        return view('admin/donhang')->with('DonHang', $DonHang->HienDonHang());
    }
    // Detail
    public function getDonHang($id)
    {
        $DonHang = new AdminService();
        return view('admin/donhang-detail')->with('DonHang', $DonHang->ChiTietDonHang($id));
    }
    // Update
    public function updateDonHang($id){
        $DonHang = new AdminService();
        $DonHang->SuaTinhTrangDH($id);
        return redirect('admin/donhang');
    }
    

    // ---------- San Pham ----------
    // All
    public function sanPham()
    {
        $SanPham = new AdminService();
        return view('admin/sanpham')->with('SanPham', $SanPham->HienSanPham());
    }
    // Detail
    public function getSanPham($id)
    {
        $SanPham = new AdminService();
        return view('admin/sanpham-detail')->with('SanPham', $SanPham->HienChiTietSanPham($id));
    }
    // Add
    public function addSanPham()
    {
        $SanPham = new AdminService();
        return view('admin/addsanpham')->with('SanPham', $SanPham->HienDanhMuc());
    }
    // Insert
    public function insertSanPham(Request $request)
    {
        $SanPham = new AdminService();
        $SanPham->ThemSanPhamMoi($request);
        return redirect('admin/sanpham');
    }
    // Update
    public function updateSanPham($id)
    {
        $SanPham = new AdminService();
        $SanPham->SuaSanPhamDaChon($id);
        return redirect('admin/sanpham');
    }
    // Hidden
    public function hiddenSanPham($id)
    {
        $SanPham = new AdminService();
        $SanPham->AnSanPhamDaChon($id);
        return redirect('admin/sanpham');
    }

}

