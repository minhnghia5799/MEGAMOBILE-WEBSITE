<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DonHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->increments('idDonHang');
            $table->integer('idKhachHang')->unsigned();
            $table->string('TinhTrang');
            $table->date('NgayTao');
            $table->float('TongTien');
            $table->string('Coupon');
            $table->timestamps();
        });

        Schema::table('donhang', function (Blueprint $table) {
            $table->foreign('idKhachHang')->references('idKhachHang')->on('khachhang');
            $table->foreign('Coupon')->references('MaCoupon')->on('coupon'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
