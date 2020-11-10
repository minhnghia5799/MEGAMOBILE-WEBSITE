<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin/quanlysanpham/sanphammoi', function () {
    return view('admin/sanphammoi');
});

// host/admin/coupon/delete
Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => 'quanlycoupon'], function(){
        Route::get('/', [AdminController::class, 'Coupon']);
        Route::post('/themcoupon', [AdminController::class, 'TaoThemCoupon']);
        Route::get('/{MaCoupon}', [AdminController::class, 'AnCoupon']);
    });
    Route::group(['prefix' => 'quanlydanhmuc'], function(){
        Route::get('/', [AdminController::class, 'DanhMuc']);
        Route::get('/{idDanhMuc}', [AdminController::class, 'AnDanhMuc']);
        Route::post('/themdanhmuc', [AdminController::class, 'TaoThemDanhMuc']);        
    });
    Route::group(['prefix' => 'quanlykhachhang'], function(){
        Route::get('/', [AdminController::class, 'KhachHang']);    
    });
    Route::group(['prefix' => 'quanlydonhang'], function(){
        Route::get('/', [AdminController::class, 'DonHang']);
        Route::get('/{idDonHang}', [AdminController::class, 'ChiTietDonHang']);
        Route::post('/capnhattrangthai/{idDonHang}', [AdminController::class, 'TinhTrangDonHang']);

    });
    Route::group(['prefix' => 'quanlysanpham'], function(){
        Route::get('/', [AdminController::class, 'SanPham']);
        Route::get('/{idSanPham}', [AdminController::class, 'ChiTietSanPham']);
        Route::get('ansanpham/{idSanPham}', [AdminController::class, 'AnSanPham']);
        Route::post('{idSanPham}/suasanpham', [AdminController::class, 'SuaSanPham']);
        Route::post('/themsanpham', [AdminController::class, 'TaoThemSanPham']);
    });

});

Route::get('/login', 'LoginController@index');
Route::get('/signup', function () {
    return view('shop/signup');
});

Route::get('/', function () {
    return view('shop/index');
});

Route::get('/cart', function () {
    return view('shop/cart');
});
Route::get('/checkout', function () {
    return view('shop/checkout');
});
Route::get('/store', function () {
    return view('shop/store');
});
Route::get('/single-product', function () {
    return view('shop/single-product');
});



//Đã xử lý
// Route::get('admin/quanlydanhmuc', [AdminController::class, 'DanhMuc']);
// Route::get('admin/quanlykhachhang', [AdminController::class, 'KhachHang']);

// Route::get('admin/quanlydonhang', [AdminController::class, 'DonHang']);

// Route::post('admin/themdanhmuc', [AdminController::class, 'TaoThemDanhMuc']);

// Route::get('admin/quanlydanhmuc/{idDanhMuc}', [AdminController::class, 'AnDanhMuc']);
// Route::get('/admin/quanlykhachhang', function () {
//     return view('admin/quanlykhachhang');
// });
// Route::get('/admin/chitietdonhang', function () {
//     return view('admin/chitietdonhang');
// });