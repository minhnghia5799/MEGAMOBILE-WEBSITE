<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminService;

class AdminController extends Controller
{
    //Danh Muc
    public function DanhMuc(){
        $DanhMuc = new AdminService();
        return view('admin/quanlydanhmuc')->with('DanhMuc', $DanhMuc->HienDanhMuc());
    }

    public function TaoThemDanhMuc(){
        $DanhMuc = new AdminService();
        $DanhMuc->ThemDanhMucMoi();
        return redirect('admin/quanlydanhmuc');
    }
    
    public function AnDanhMuc($idDanhMuc)
    {
        $DanhMuc = new AdminService();
        $DanhMuc->AnDanhMucDaChon($idDanhMuc);
        return redirect('admin/quanlydanhmuc');
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

    public function AnCoupon($MaCoupon){
        $Coupon = new AdminService();
        $Coupon->AnCouponDaChon($MaCoupon);
        return redirect('admin/quanlycoupon');
    }

    //QLĐH
    public function DonHang(){
        $DonHang = new AdminService();
        return view('admin/quanlydonhang')->with('DonHang', $DonHang->HienDonHang());
    }
    public function ChiTietDonHang($idDonHang){
        $DonHang = new AdminService();
        return view('admin/chitietdonhang')->with('DonHang', $DonHang->ChiTietDonHang($idDonHang));
    }
    public function TinhTrangDonHang($idDonHang){
        $DonHang = new AdminService();
        $DonHang->SuaTinhTrangDH($idDonHang);
        return redirect('admin/quanlydonhang');
    }
    


    //QLSP
    public function SanPham(){
        $SanPham = new AdminService();
        return view('admin/quanlysanpham')->with('SanPham', $SanPham->HienSanPham());
    }
    public function ChiTietSanPham($idSanPham){
        $SanPham = new AdminService();
        return view('admin/chitietsanpham')->with('SanPham', $SanPham->HienChiTietSanPham($idSanPham));
    }
    public function AnSanPham($idSanPham){
        $SanPham = new AdminService();
        $SanPham->AnSanPhamDaChon($idSanPham);
        return redirect('admin/quanlysanpham');
    }
    public function SuaSanPham($idSanPham){
        $SanPham = new AdminService();
        $SanPham->SuaSanPhamDaChon($idSanPham);
        return redirect('admin/quanlysanpham');
    }
    public function TaoThemSanPham(Request $request){

        $SanPham = new AdminService();
        $SanPham->ThemSanPhamMoi($request);
        return redirect('admin/quanlysanpham');
    }
}

