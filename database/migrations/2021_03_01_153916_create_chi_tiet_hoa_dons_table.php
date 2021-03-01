<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietHoaDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_hoa_dons', function (Blueprint $table) {
            $table->bigIncrements('cthd_id');
            $table->integer('cthd_soluong');
            $table->float('cthd_dongia');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->Biginteger('hd_id')->unsigned();
            $table->foreign('hd_id')->references('hd_id')->on('hoa_dons')->onDelete('cascade');

            $table->Biginteger('sp_id')->unsigned();
            $table->foreign('sp_id')->references('sp_id')->on('san_phams')->onDelete('cascade');

            // $table->primary(['hd_id','sp_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_hoa_dons');
    }
}
