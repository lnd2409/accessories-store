<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->bigIncrements('hd_id');
            $table->dateTime('hd_ngaytao');
            $table->float('hd_tongtien');
            $table->integer('hd_trangthai')->default(0);
            $table->timestamps();

            $table->Biginteger('kh_id')->unsigned();
            $table->foreign('kh_id')->references('kh_id')->on('khach_hang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoa_dons');
    }
}
