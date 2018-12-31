<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('receptionPlaceCity');
            $table->string('receptionPlaceStreet');
            $table->string('receptionPlaceZipCode');
            $table->string('receptionPlacePhone');

            $table->string('deliverPlaceFirstname');
            $table->string('deliverPlaceLastname');
            $table->string('deliverPlaceCity');
            $table->string('deliverPlaceStreet');
            $table->string('deliverPlaceZipCode');
            $table->string('deliverPlacePhone');

            $table->integer('kurier_id');
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
        Schema::dropIfExists('order_places');
    }
}
