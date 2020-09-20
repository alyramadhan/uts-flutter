<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_buku', function (Blueprint $table) {
            $table->id();
            $table->string('nama_buku');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->timestamp('tahun_cetak')->nullable();
            $table->timestamp('tahun_terbit')->nullable();
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
        Schema::dropIfExists('daftar_buku');
    }
}
