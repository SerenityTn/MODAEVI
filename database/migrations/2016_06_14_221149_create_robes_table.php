<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRobesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('robes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('ref');
            $table->string('color');
            $table->integer('size');
            $table->string('category');
            $table->double('buy_price');
            $table->double('price');
            $table->double('min_price');
            $table->string('img_name');
            $table->timestamps();
            $table->unique(array('ref', 'category', 'color'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('robes');
    }
}
