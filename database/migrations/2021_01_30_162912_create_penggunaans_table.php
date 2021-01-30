<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunaans', function (Blueprint $table) {
            $table->bigIncrements('id_penggunaan');
            $table->unsignedBigInteger('pelanggan_id');
            $table->string('bulan', 50);
            $table->char('tahun', 4);
            $table->integer('meter_awal');
            $table->integer('meter_akhir');
            $table->timestamps();

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
        Schema::dropIfExists('penggunaans');
    }
}
