<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuanTriVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quantrivien',function (Blueprint $table) {
            $table->bigIncrements('ma_quan_tri');
            $table->string('ten_quan_tri');
            $table->string('ten_dang_nhap');
            $table->string('mat_khau');
            $table->string('gioi_tinh');
            $table->dateTime('ngay_sinh');
            $table->string('dia_chi');
            $table->string('gmail')->unique();
            $table->string('dien_thoai');
            $table->integer('trang_thai');
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
        Schema::table('quantrivien', function (Blueprint $table) {
            //
        });
    }
}
