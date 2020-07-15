<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThanNhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thannhan', function (Blueprint $table) {
            //
            $table->bigIncrements('ma_than_nhan');
            $table->string('ten_than_nha');
            $table->Integer('tuoi');
            $table->string('gioi_tinh');
            $table->dateTime('ngay_sinh');
            $table->string('dia_chi');
            $table->string('dien_thoai');
            $table->string('cmnd');
            $table->integer('ma_khach_hang')->references('ma_khach_hang')->on('khachhang');
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
        Schema::table('thannhan', function (Blueprint $table) {
            //
        });
    }
}
