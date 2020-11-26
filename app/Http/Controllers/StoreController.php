<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminService;
use App\Services\StoreService;

class StoreController extends Controller
{
    //
    public function Store(){
        $SanPham = new AdminService();
        $SanPham1 = $SanPham->HienSanPham();
        $DanhMuc =  $SanPham->HienDanhMuc();
        return view('shop/store', compact('SanPham1', 'DanhMuc',));
    }

    public function Search(){
        $SanPham = new StoreService();
        return view('shop/store')->with('SanPham',$SanPham->TimKiemSP());
    }
    public function SPTheoDM(){
    $data = request()->all();
        if($data['DanhMuc']!='all'){
            $Admin = new AdminService();
            $SanPham = new StoreService();
            $DanhMuc = $Admin->HienDanhMuc();
            $SanPham1 = $SanPham->ListSPTheoDM();
            return view('shop/store', compact('SanPham1', 'DanhMuc',));
        }else{
            return redirect('/store');
        }
    }
}
