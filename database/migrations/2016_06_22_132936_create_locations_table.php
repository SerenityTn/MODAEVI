<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('cliente_id')->unsigned();
            $table->integer('robe_id')->unsigned();
            $table->double('avance');
            $table->double('reste');
            $table->dateTime('date_location');
            $table->string('assurance');
            $table->string('notes');
            $table->foreign ( "cliente_id" )->references ( 'id' )->on ('clientes')->onDelete ( 'cascade' );
            $table->foreign ( "robe_id" )->references ( 'id' )->on ('robes');
            $table->timestamps();
        });

        Schema::create('addons', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('addon_location', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->integer('addon_id')->unsigned();
            $table->foreign ( "location_id" )->references ( 'id' )->on ( 'locations' )->onDelete ( 'cascade' );
            $table->foreign ( "addon_id" )->references ( 'id' )->on ( 'addons' )->onDelete ( 'cascade' );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('location_addon');
        Schema::drop('addons');
        Schema::drop('locations');
    }
}
