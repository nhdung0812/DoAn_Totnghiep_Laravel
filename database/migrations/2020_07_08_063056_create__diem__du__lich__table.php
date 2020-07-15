<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiemDuLichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diadiem', function (Blueprint $table) {
            //
            $table->bigIncrements('ma_dia_diem');
            $table->string('ten_dia_diem');
            $table->string('thongtin');
            $table->integer('ma_tinh')->references('ma_tinh')->on('tinhthanh');
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
        Schema::table('diadiem', function (Blueprint $table) {
            //
        });
    }
}
