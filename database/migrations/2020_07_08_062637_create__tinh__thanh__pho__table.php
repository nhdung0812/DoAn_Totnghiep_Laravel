<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinhThanhPhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinhthanh', function (Blueprint $table) {
            //
            $table->bigIncrements('ma_tinh');
            $table->string('ten_tinh');
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
        Schema::table('tinhthanh', function (Blueprint $table) {
            //
            Schema::dropIfExists('tinhthanh');
        });
    }
}
