<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminService;
use App\Services\SingleProductService;

class SingleProductController extends Controller
{
    //
    public function SingleProduct($idSanPham)
    {
        $SanPham = new AdminService();
        return view('shop/single-product')->with('SanPham', $SanPham->HienChiTietSanPham($idSanPham));
    }
}
