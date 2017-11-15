<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderStudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_studios', function (Blueprint $table) {
            $table->increments('id_order_detail');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id_order')->on('orders');
            $table->integer('studio_id')->unsigned();
            $table->foreign('studio_id')->references('id_studio')->on('studios');
            $table->integer('jam_order');
            $table->text('deskripsi');
            $table->double('harga');
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
        Schema::dropIfExists('order_studios');
    }
}
