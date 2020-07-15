<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dattour', function (Blueprint $table) {
            //
            $table->bigIncrements('ma_dat_tour');
            $table->Integer('ma_tour')->references('ma_tour')->on('chuongtrinhtour');
            $table->dateTime('ngay_dat');
            $table->Integer('so_cho');
            $table->double('thanh_tien');
            $table->Integer('trang_thai_thanh_toan');
            $table->Integer('trang_thai');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dattour', function (Blueprint $table) {
            //
        });
    }
}
