<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ktp')->nullable();
            $table->string('nama')->nullable();
            $table->string('notelp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('id_place')->unsigned();
            $table->date('tglbook')->nullable();
            $table->bigInteger('jmlhorang')->nullable();
            $table->double('total', 8,2)->nullable();
            $table->String('statusbayar')->nullable();
            $table->timestamps();
        });
        Schema::table('orders', function($table){
            $table->foreign('id_place')->references('id')->on('places')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
