<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mien', function (Blueprint $table) {
            $table->bigIncrements('ma_mien')->references('ma_mien')->on('chitiettour');
            $table->string('ten_mien');
            $table->integer('ma_loai_tour');
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
        Schema::table('mien', function (Blueprint $table) {
            //
        });
    }
}
