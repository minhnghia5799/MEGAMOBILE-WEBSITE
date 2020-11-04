<?php
namespace App\Services;

use App\Models\DanhMucSanPham;
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
}
?>