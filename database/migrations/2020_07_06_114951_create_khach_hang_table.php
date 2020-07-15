<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->bigIncrements('ma_khach_hang');
            $table->string('ten_kh');
            $table->Integer('tuoi');
            $table->string('gioi_tinh');
            $table->dateTime('ngay_sinh');
            $table->string('dia_chi');
            $table->string('gamil')->unique();
            $table->string('dien_thoai');
            $table->string('cmnd');
            $table->integer('so_luong_than_nhan');
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
        Schema::dropIfExists('khach_hang');
    }
}
