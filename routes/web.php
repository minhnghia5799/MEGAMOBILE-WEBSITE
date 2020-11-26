<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SingleProductController;


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

// ADMIN
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [AdminController::class, 'index']);

    // Coupon
    Route::group(['prefix' => 'coupon'], function(){
        Route::get('/', [AdminController::class, 'coupon']);
        Route::post('/insert', [AdminController::class, 'insertCoupon']);
        Route::get('/hidden/{id}', [AdminController::class, 'hiddenCoupon']);
    });

    // Danh Muc
    Route::group(['prefix' => 'danhmuc'], function(){
        Route::get('/', [AdminController::class, 'danhMuc']);
        Route::post('/insert', [AdminController::class, 'insertDanhMuc']);  
        Route::get('/hidden/{id}', [AdminController::class, 'hiddenDanhMuc']);
    });

    // Khach Hang
    Route::group(['prefix' => 'khachhang'], function(){
        Route::get('/', [AdminController::class, 'khachHang']);    
    });

    // Don Hang
    Route::group(['prefix' => 'donhang'], function(){
        Route::get('/', [AdminController::class, 'donHang']);
        Route::get('/{id}', [AdminController::class, 'getDonHang']);
        Route::post('/update/{id}', [AdminController::class, 'updateDonHang']);
    });

    // San Pham
    Route::group(['prefix' => 'sanpham'], function(){
        Route::get('/', [AdminController::class, 'sanPham']);
        Route::get('/{id}', [AdminController::class, 'getSanPham']);
        Route::get('/add', [AdminController::class, 'addSanPham']);
        Route::post('/insert', [AdminController::class, 'insertSanPham']);
        Route::post('/update/{id}', [AdminController::class, 'updateSanPham']);
        Route::get('/hidden/{id}', [AdminController::class, 'hiddenSanPham']);
    });
});

//SHOP
Route::group(['prefix' => '/'], function(){
    Route::get('/', [IndexController::class, 'Index']);
    Route::get('store', [StoreController::class, 'Store']);
    Route::get('store/search', [StoreController::class, 'Search']);
    Route::get('store/DanhMuc', [StoreController::class, 'SPTheoDM']);
    Route::get('/single-product/{idSanPham}', [SingleProductController::class, 'SingleProduct']);
    
});

// Dang Nhap - Dang Ky
Route::get('/login', 'LoginController@index');
Route::get('/signup', function (){
    return view('shop/signup');
});

// Cua Hang
// Route::get('/', function (){
//     return view('shop/index');
// });
// Route::get('/store', function (){
//     return view('shop/store');
// });
// Route::get('/single-product', function (){
//     return view('shop/single-product');
// });

// Gio Hang - Thanh Toan
Route::get('/cart', function (){
    return view('shop/cart');
});
Route::get('/checkout', function (){
    return view('shop/checkout');
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