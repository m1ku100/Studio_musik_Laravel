<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonfirmasiPembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfirmasi_pembayarans', function (Blueprint $table) {
            $table->increments('id_konfimasi');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id_order')->on('orders');
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('users');
            $table->string('atas_nama');
            $table->string('nama_bank');
            $table->date('tanggal_pembayaran');
            $table->text('deskripsi');
            $table->integer('jumlah');
            $table->string('bukti_pembayaran');
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
        Schema::dropIfExists('konfirmasi_pembayarans');
    }
}
