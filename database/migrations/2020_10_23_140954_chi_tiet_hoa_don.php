<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChiTietHoaDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadon', function (Blueprint $table) {
            $table->integer('idDonHang')->unsigned();
            $table->integer('idSanPham')->unsigned();
            $table->float('GiaLucMua');
            $table->timestamps();
        });

        Schema::table('chitiethoadon', function (Blueprint $table) {
            $table->primary(['idSanPham', 'idDonHang']);
            
            $table->foreign('idDonHang')->references('idDonHang')->on('DonHang');
            $table->foreign('idSanPham')->references('idSanPham')->on('SanPham'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitiethoadon');
    }
}
