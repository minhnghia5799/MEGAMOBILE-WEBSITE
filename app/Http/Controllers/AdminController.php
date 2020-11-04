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
}

