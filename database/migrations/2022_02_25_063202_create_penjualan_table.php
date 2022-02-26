<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_penjualan')->unique();
            $table->date('tgl_penjualan');
            $table->string('nama_pelanggan');
            $table->enum('ppn',['0','0.1','0.01']);
            $table->string('npwp_pelanggan');
            $table->integer('id_user')->unsigned();
            $table->timestamps();
        });
        Schema::table('penjualan', function($table) {
           $table->foreign('id_user')->references('id')->on('user');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
}
