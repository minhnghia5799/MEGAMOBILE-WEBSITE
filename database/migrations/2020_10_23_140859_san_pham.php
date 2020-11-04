<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('idSanPham');
            $table->string('TenSanPham');
            $table->integer('DanhMuc')->unsigned();
            $table->float('Gia');
            $table->float('GiaKhuyenMai');
            $table->string('DuongDanAnh');
            $table->text('MoTa');
            $table->integer('SoLuongBan');
            $table->integer('SoLuotXem');
            $table->integer('SoLuongHienCo');
            $table->string('TinhTrang');
            $table->date('CapNhatCuoi');
            $table->timestamps();
        });
        
        Schema::table('sanpham', function (Blueprint $table) {
            $table->foreign('DanhMuc')->references('idDanhMuc')->on('danhmucsanpham');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
