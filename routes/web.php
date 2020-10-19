<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/admin/quanlydonhang', function () {
    return view('admin/quanlydonhang');
});
Route::get('/admin/chitietdonhang', function () {
    return view('admin/chitietdonhang');
});
Route::get('admin/quanlyloaisach', function () {
    return view('admin/quanlyloaisach');
});
Route::get('admin/quanlysach', function () {
    return view('admin/quanlysach');
});