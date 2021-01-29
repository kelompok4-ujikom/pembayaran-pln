<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengguanaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguanaans', function (Blueprint $table) {
            $table->bigIncrements('id_penggunaan');
            $table->integer('pelanggan_id');
            $table->string('bulan', 50);
            $table->char('tahun', 4);
            $table->integer('meter_awal');
            $table->integer('meter_akhir');
            $table->timestamps();

            $table->foreign('pelanggan_id')->references('id_pelanggan')->on('pelanggans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengguanaans');
    }
}
