<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiemHinhAnhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanh', function (Blueprint $table) {
            //
            $table->bigIncrements('ma_hinh');
            $table->integer('ma_dia_diem')->references('ma_dia_diem')->on('diadiem');
            $table->string('hinh_anh_1');
            $table->string('hinh_anh_2');
            $table->string('hinh_anh_3');
            $table->string('hinh_anh_4');
            $table->string('hinh_anh_5');
            $table->string('hinh_anh_6');
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
        Schema::table('hinhanh', function (Blueprint $table) {
            //
        });
    }
}
