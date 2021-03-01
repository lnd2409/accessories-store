<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietPhieuNhapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_phieu_nhap', function (Blueprint $table) {
            $table->bigIncrements('ctpn_id');
            $table->integer('ctpn_soluong');
            $table->float('ctpn_dongia');
            $table->text('ctpn_ghichu')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->Biginteger('l_id')->unsigned();
            $table->foreign('l_id')->references('l_id')->on('lo')->onDelete('cascade');

            $table->Biginteger('pn_id')->unsigned();
            $table->foreign('pn_id')->references('pn_id')->on('phieu_nhap')->onDelete('cascade');

            $table->Biginteger('sp_id')->unsigned();
            $table->foreign('sp_id')->references('sp_id')->on('san_pham')->onDelete('cascade');

            // $table->primary(['l_id', 'pn_id','sp_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_phieu_nhaps');
    }
}
