<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaiKhoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taikhoan', function (Blueprint $table) {
            //
            $table->bigIncrements('ma_tai_khoan');
            $table->integer('ma_khach_hang')->references('ma_khach_hang')->on('khachhang');
            $table->string('tai_khoan')->unique();
            $table->string('mat_khau');
            $table->integer('quyen_truy_cap');
            $table->integer('trang_tai');
            $table->integer('hoi_vien')->nullable();
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
        Schema::table('taikhoan', function (Blueprint $table) {
            //
        });
    }
}
