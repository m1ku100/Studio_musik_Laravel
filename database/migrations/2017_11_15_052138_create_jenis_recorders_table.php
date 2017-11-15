<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisRecordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_recorders', function (Blueprint $table) {
            $table->increments('id_jenis_recorder');
            $table->string('nama_recorder');
            $table->text('deskripsi');
            $table->integer('harga_recorder');
            $table->integer('batas_hari');


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
        Schema::dropIfExists('jenis_recorders');
    }
}
