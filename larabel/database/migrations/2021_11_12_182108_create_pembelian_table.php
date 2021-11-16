<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('waktu');
            $table->string('AlamatPengiriman');
            $table->integer('TotalPembelian');
            $table->string('StatusPengiriman');
            $table->string('StatusPembayaran');
            $table->string('MetodePengiriman');
            $table->string('MetodePembayaran');
            $table->unsignedBigInteger('id_pelanggan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelian');
    }
}
