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
            $table->integer('tagihan_id');
            $table->integer('pelanggan_id');
            $table->datetime('tanggal_pembayaran');
            $table->string('bulan_pembayaran', 50);
            $table->integer('biaya_admin');
            $table->integer('total_bayar');
            $table->integer('admin_id');
            $table->timestamps();
            
            $table->foreign('tagihan_id')->references('id_tagihan')->on('tagihans');
            $table->foreign('pelanggan_id')->references('id_pelanggan')->on('pelanggans');
            $table->foreign('admin_id')->references('id_admin')->on('admins');
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
