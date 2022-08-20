<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spesifikasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->integer('kode_id');
            $table->string('merk');
            $table->string('nomor_sertifikat');
            $table->string('bahan');
            $table->string('asal');
            $table->integer('tahun_beli');
            $table->string('ukuran');
            $table->integer('harga_satuan');
            $table->string('keadaan_barang');
            $table->integer('jumlah_barang');
            $table->integer('harga');
            $table->integer('ruang_id');
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
        Schema::dropIfExists('spesifikasi');
    }
};
