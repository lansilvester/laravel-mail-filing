<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('nama_barang')->nullable();
            $table->string('merk_type')->nullable();
            $table->string('nomor_seri')->nullable();
            $table->string('tahun_pembuatan')->nullable();
            $table->string('warna')->nullable();
            $table->string('processor')->nullable();
            $table->string('memory')->nullable();
            $table->string('penyimpanan')->nullable();
            $table->string('ukuran_layar')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
