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
            $table->integer('id_pelanggan');
            $table->string('bulan', 64);
            $table->char('tahun', 4);
            $table->integer('meter_awal');
            $table->integer('meter_akhir');
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
        Schema::dropIfExists('penggunaans');
    }
}
