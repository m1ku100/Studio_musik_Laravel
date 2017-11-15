<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_ins', function (Blueprint $table) {
            $table->increments('id_inst');
            $table->integer('studio_id')->unsigned();
            $table->foreign('studio_id')->references('id_studio')->on('studios');
            $table->integer('jenis_alat_id')->unsigned();
            $table->foreign('jenis_alat_id')->references('id_jenis_alat')->on('jen_alats');
            $table->string('nama_inst');
            $table->string('gambar');
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
        Schema::dropIfExists('new_ins');
    }
}
