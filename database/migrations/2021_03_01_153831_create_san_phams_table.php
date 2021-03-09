<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham', function (Blueprint $table) {
            $table->bigIncrements('sp_id');
            $table->string('sp_tensanpham');
            $table->integer('sp_soluong');
            $table->text('sp_mota');
            $table->timestamps();
            $table->Biginteger('lsp_id')->unsigned();
            $table->foreign('lsp_id')->references('lsp_id')->on('loai_san_pham')->onDelete('cascade');
            $table->Biginteger('dmth_id')->unsigned();
            $table->foreign('dmth_id')->references('dmth_id')->on('danh_muc_thuong_hieu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_phams');
    }
}
