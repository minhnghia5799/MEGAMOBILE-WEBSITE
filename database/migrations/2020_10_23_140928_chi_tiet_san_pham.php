<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChiTietSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietsanpham', function (Blueprint $table) {
            $table->integer('idSanPham')->unsigned();
            $table->integer('idKhachHang')->unsigned();
            $table->integer('DanhGia');
            $table->text('NhanXet');
        });

        Schema::table('chitietsanpham', function (Blueprint $table) {
            $table->primary(['idSanPham', 'idKhachHang']);
            
            $table->foreign('idKhachHang')->references('idKhachHang')->on('khachhang');
            $table->foreign('idSanPham')->references('idSanPham')->on('sanpham'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietsanpham');
    }
}
