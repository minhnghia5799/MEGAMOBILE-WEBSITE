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

Route::get('/admin/quanlykhachhang', function () {
    return view('admin/quanlykhachhang');
});
Route::get('/admin/chitietdonhang', function () {
    return view('admin/chitietdonhang');
});
// Route::get('admin/quanlyloaisach', function () {
//     return view('');
// });
//Route::get('admin/quanlyloaisach', 'App\Http\Controllers\AdminController@DanhMuc');
Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => 'coupon'], function(){
        Route::get('/', [AdminController::class, 'Coupon']);
        Route::post('/add', [AdminController::class, 'TaoThemCoupon']);
    });    
});

// host/admin/coupon/delete
Route::get('admin/quanlyloaisach', [AdminController::class, 'DanhMuc']);
Route::get('admin/quanlykhachhang', [AdminController::class, 'KhachHang']);

Route::get('admin/quanlydonhang', [AdminController::class, 'DonHang']);

Route::post('admin/themdanhmuc', [AdminController::class, 'TaoThemDanhMuc']);

Route::get('admin/quanlyloaisach/{idDanhMuc}', [AdminController::class, 'AnDanhMuc']);
Route::get('admin/quanlysach', function () {
    return view('admin/quanlysach');
});
// Route::get('/login', function () {
//     return view('shop/login');
// });
Route::get('/login', 'LoginController@index');
Route::get('/signup', function () {
    return view('shop/signup');
});