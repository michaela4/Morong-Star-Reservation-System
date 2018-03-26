<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaytripOffPeakSeasonPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daytrip__off_peak_season__packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('accomodation', 300);
            $table->integer('occupants')->nullable();
            $table->string('no_of_cottage')->nullable();
            $table->double('unit_cost')->nullable();
            $table->integer('lenght_of_stay')->nullable();
            $table->double('amount')->nullable();
            $table->string('reservation_status')->nullable();
            $table->double('amenities_amount')->nullable();
            $table->double('total_amount')->nullable();
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
        Schema::dropIfExists('daytrip__off_peak_season__packages');
    }
}
