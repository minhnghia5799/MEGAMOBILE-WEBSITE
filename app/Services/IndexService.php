<?php
namespace App\Services;

use App\Models\DanhMucSanPham;
use App\Models\KhachHang;
use App\Models\Coupon;
use App\Models\DonHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexService 
{

    public function List3TopSellers(){
        $SanPham = DB::select('SELECT * from sanpham ORDER BY SoLuongBan DESC LIMIT 3');
        return $SanPham;
    }

    public function List3TopPrice(){
        $SanPham = DB::select('SELECT * from sanpham ORDER BY Gia DESC LIMIT 3');
        return $SanPham;
    }

    public function List3TopNew(){
        $SanPham = DB::select('SELECT * from sanpham LIMIT 3');
        return $SanPham;
    }

}