<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiettour', function (Blueprint $table) {
            //
            $table->integer('ma_tour')->references('ma_tour')->on('chuongtrinhtour');
            $table->integer('ma_tinh')->references('ma_tinh')->on('tinhthanh');
            $table->integer('ma_mien');
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
        Schema::table('chitiettour', function (Blueprint $table) {
            //
        });
    }
}
