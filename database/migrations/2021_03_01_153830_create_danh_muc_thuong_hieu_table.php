<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhMucThuongHieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danh_muc_thuong_hieu', function (Blueprint $table) {
            $table->bigIncrements('dmth_id');
            $table->string('dmth_ten');
            $table->Biginteger('th_id')->unsigned();
            $table->foreign('th_id')->references('th_id')->on('thuong_hieu')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thuong_hieu');
    }
}
