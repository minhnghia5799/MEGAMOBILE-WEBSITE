<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\IndexService;

class IndexController extends Controller
{
    //
    public function Index(){
        $SanPham = new IndexService();
        $SanPham1 = $SanPham->List3TopSellers();
        $SanPham2 = $SanPham->List3TopNew();
        $SanPham3 = $SanPham->List3TopPrice();
        return view('shop/index', compact('SanPham1', 'SanPham2','SanPham3'));
    }
}
