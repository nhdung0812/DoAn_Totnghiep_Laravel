<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaiTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaitour', function (Blueprint $table) {
            //
            $table->bigIncrements('ma_loai_tour');
            $table->string('ten_loai_tour');
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
        Schema::table('loaitour', function (Blueprint $table) {
            //
        });
    }
}
