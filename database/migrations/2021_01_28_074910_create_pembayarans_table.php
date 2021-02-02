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
            $table->bigInteger('id_tagihan')->unsigned();
            $table->bigInteger('id_pelanggan')->unsigned();
            $table->date('tanggal_pembayaran');
            $table->string('bulan_bayar', 64);
            $table->string('biaya_admin', 64);
            $table->string('total_bayar', 64);
            $table->bigInteger('id_admin')->unsigned();
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
        Schema::dropIfExists('pembayarans');
    }
}
