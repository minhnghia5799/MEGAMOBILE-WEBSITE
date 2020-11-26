<?php
namespace App\Services;

use App\Services\StoreService;
use App\Services\AdminService;

use App\Models\DanhMucSanPham;
use App\Models\KhachHang;
use App\Models\Coupon;
use App\Models\DonHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreService 
{

    public function TimKiemSP(){
        $data = request()->all();
        $SanPham = DB::select("SELECT * from sanpham WHERE TenSanPham LIKE '%".$data['Search']."%'");
        return $SanPham;
    }

    public function ListSPTheoDM(){
        $data = request()->all();
        $idDanhMuc = $data['DanhMuc'];
        $SanPham = DB::select("SELECT * from sanpham WHERE DanhMuc=$idDanhMuc");
        return $SanPham;
    }

}