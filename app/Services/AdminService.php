<?php
namespace App\Services;

use App\Models\DanhMucSanPham;
use App\Models\KhachHang;
use App\Models\Coupon;
use App\Models\DonHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminService 
{
    //DanhMuc
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

    //KH
    public function HienKhachHang(){
        return KhachHang::all();
    }

    //Coupon
    public function HienCoupon(){
        return Coupon::all();
    }

    public function ThemCouponMoi(){
        $data = request()->all();
        $Coupon = new Coupon();
        $Coupon->MaCoupon = $data['MaCoupon'];
        $Coupon->NgayBD = date_format(date_create($data['NgayBD']),"Y-m-d");
        $Coupon->NgayKT = date_format(date_create($data['NgayKT']),"Y-m-d");
        $Coupon->GiaTri = $data['GiaTri'];
        $Coupon->TinhTrang = 'con hieu luc';
        $Coupon->save();
    }

    public function AnCouponDaChon($MaCoupon)
    {
        $Coupon = Coupon::find($MaCoupon);
        $Coupon->TinhTrang = 'an';
        $Coupon->save();
    }

    //DonHang
    public function HienDonHang(){
        return DonHang::all();
    }
    public function ChiTietDonHang($idDonHang){
        $DonHang = DB::table('chitiethoadon')->join('donhang', 'chitiethoadon.idDonHang', '=', 'donhang.idDonHang')->where('chitiethoadon.idDonHang',$idDonHang)->get();
        return $DonHang;
    }
    public function SuaTinhTrangDH($idDonHang){
        $data = request()->all();
        $DonHang = DonHang::find($idDonHang);
        $DonHang->TinhTrang = $data['tinhtrangdonhang'];
        $DonHang->save();
    }

    //SP
    public function HienSanPham(){
        return SanPham::all();
    }

    public function HienChiTietSanPham($idSanPham){
        $DanhMuc = DB::table('danhmucsanpham')->join('sanpham', 'danhmucsanpham.idDanhMuc', '=', 'sanpham.DanhMuc')->where('sanpham.idSanPham',$idSanPham)->value('TenDanhMuc');
        $SanPham = SanPham::find($idSanPham);
        $SanPham->DanhMuc = $DanhMuc;
        return $SanPham;
    }

    public function AnSanPhamDaChon($idSanPham)
    {
        $SanPham = SanPham::find($idSanPham);
        $SanPham->TinhTrang = 'an';
        $SanPham->save();
    }
    public function SuaSanPhamDaChon($idSanPham)
    {
        $data = request()->all();
        $SanPham = SanPham::find($idSanPham);
        $SanPham->Gia = $data['Gia'];
        $SanPham->TenSanPham = $data['TenSanPham'];
        $SanPham->SoLuongHienCo = $data['SoLuongHienCo'];
        $SanPham->GiaKhuyenMai = $data['GiaKhuyenMai'];
        $SanPham->DanhMuc = $data['DanhMuc'];
        $SanPham->SoLuongBan = $data['SoLuongBan'];
        $SanPham->DuongDanAnh = $data['DuongDanAnh'];

        $SanPham->save();
    }
    public function ThemSanPhamMoi($request)
    {
        $data = request()->all();
        if($request->hasFile('file'))
        {
            echo 'co';
            $file = $request->file('file');
            $file->move('shop/phone_img',$data['DuongDanAnh'] );
        }
        $SanPham = new SanPham();
        $SanPham->Gia = $data['Gia'];
        $SanPham->TenSanPham = $data['TenSanPham'];
        $SanPham->SoLuongHienCo = $data['SoLuongHienCo'];
        $SanPham->GiaKhuyenMai = $data['GiaKhuyenMai'];
        $SanPham->DanhMuc = $data['DanhMuc'];
        $SanPham->SoLuongBan = 0;
        $SanPham->DuongDanAnh = $data['DuongDanAnh'];
        $SanPham->MoTa = $data['MoTa'];
        $SanPham->SoLuotXem = 1;
        $SanPham->TinhTrang = 'con';
        $SanPham->save();
    }
    public function LaySanPhamTheoDanhMuc($idDanhMuc)
    {
        $SanPham = DB::table('sanpham')->join('danhmucsanpham','sanpham.DanhMuc','=','danhmucsanpham.idDanhMuc')->where('danhmucsanpham.idDanhMuc',$idDanhMuc)->get();
        return $SanPham;
    }

}