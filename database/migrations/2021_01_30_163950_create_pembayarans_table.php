<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->bigIncrements('id_pembayaran');
            $table->unsignedBigInteger('tagihan_id');
            $table->unsignedBigInteger('pelanggan_id');
            $table->datetime('tanggal_pembayaran');
            $table->string('bulan_bayar', 50);
            $table->integer('biaya_admin');
            $table->integer('total_bayar');
            $table->unsignedBigInteger('admin_id');
            $table->timestamps();

            $table->foreign('tagihan_id')->references('id_tagihan')->on('tagihans')->ondelete('cascade')->onupdate('restrict');
            $table->foreign('pelanggan_id')->references('id_pelanggan')->on('pelanggans')->ondelete('cascade')->onupdate('restrict');
            $table->foreign('admin_id')->references('id_admin')->on('admins')->ondelete('cascade')->onupdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
}
