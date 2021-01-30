<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->bigIncrements('id_pelanggan');
            $table->string('username', 128);
            $table->string('password', 258);
            $table->char('nomor_kwh', 12);
            $table->string('nama_pelanggan', 128);
            $table->text('alamat');
            $table->unsignedBigInteger('tarif_id');
            $table->timestamps();

            $table->foreign('tarif_id')->references('id_tarif')->on('tarifs')->ondelete('cascade')->onupdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggans');
    }
}
