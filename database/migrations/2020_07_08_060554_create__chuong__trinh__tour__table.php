<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChuongTrinhTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuongtrinhtour', function (Blueprint $table) {
            //
            $table->bigIncrements('ma_tour');
            $table->string('ten_tour');
            $table->double('gia_tour');
            $table->date('ngay_khoi_hanh');
            $table->date('ngay_ket_thuc');
            $table->Integer('so_ngay');
            $table->Integer('so_dem');
            $table->Integer('so_cho');
            $table->string(('noi_dung'),10000);
            $table->string('hinh_anh');
            $table->integer('ma_loai_tour')->references('ma_loai_tour')->on('loaitour')->nullable();
            $table->integer('chon_goi');
            $table->integer('khuyen_mai');
            $table->integer('so_cho_da_dat');
            $table->string('ghi_chu')->nullable();
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
        Schema::table('chuongtrinhtour', function (Blueprint $table) {
            //
        });
    }
}
