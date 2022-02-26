<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_penjualan')->unsigned();
            $table->string('deskripsi');
            $table->integer('qty');
            $table->integer('harga');
            $table->timestamps();
        });
        Schema::table('penjualan_detail', function(Blueprint $table) {
           $table->foreign('id_penjualan')->references('id')->on('penjualan');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan_detail');
    }
}
