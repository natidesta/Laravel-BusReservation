<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bus_id')->unsigned()->index();
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
            $table->string('departure_city');
            $table->string('destination_city');
            $table->integer('price');
            $table->integer('available_seats');
            $table->date('date');
            $table->time('arrival_time');
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
        Schema::dropIfExists('trips');
    }
}
