<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietDatTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdattour', function (Blueprint $table) {
            //
            $table->bigIncrements('ma_dat_tour');
            $table->integer('ma_khach_hang')->references('ma_khach_hang')->on('khachhang');
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
        Schema::table('chitietdattour', function (Blueprint $table) {
            //
        });
    }
}
