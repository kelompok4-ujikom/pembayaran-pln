<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihans', function (Blueprint $table) {
            $table->bigIncrements('id_tagihan');
            $table->unsignedBigInteger('penggunaan_id');
            $table->unsignedBigInteger('pelanggan_id');
            $table->string('bulan', 50);
            $table->char('tahun', 4);
            $table->integer('jumlah_meter');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('penggunaan_id')->references('id_penggunaan')->on('penggunaans')->ondelete('cascade')->onupdate('restrict');
            $table->foreign('pelanggan_id')->references('id_pelanggan')->on('pelanggans')->ondelete('cascade')->onupdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tagihans');
    }
}
