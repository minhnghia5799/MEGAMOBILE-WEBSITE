<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Coupon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon', function (Blueprint $table) {
            $table->string('MaCoupon');
            $table->date('NgayBD');
            $table->date('NgayKT');
            $table->float('GiaTri');
            $table->string('TinhTrang');
        });

         Schema::table('coupon', function (Blueprint $table) {
             $table->primary('MaCoupon');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon');
    }
}
