<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayTripOffPeakSeasonPromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_trip_off_peak_season_promos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('accomodation', 300)->nullable();
            $table->double('unit_cost')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('day_trip_off_peak_season_promos');
    }
}
