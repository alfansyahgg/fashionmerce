<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGambarProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambars', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('produk_id');
            $table->foreign('produk_id')->references('produk_id')->on('produks');
            $table->string('deskripsi')->nullable();
            $table->string('gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gambars');
    }
}
