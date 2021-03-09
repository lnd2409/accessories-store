<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhAnhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinh_anh', function (Blueprint $table) {
            $table->bigIncrements('ha_id');
            $table->string('ha_duongdan');
            $table->Biginteger('sp_id')->unsigned();
            $table->foreign('sp_id')->references('sp_id')->on('san_pham')->onDelete('cascade');
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
        Schema::dropIfExists('hinh_anhs');
    }
}
