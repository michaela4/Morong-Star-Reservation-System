<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->nullable();
            $table->integer('user_id')->nullable();  // a hunch to change, from staff_id

            $table->integer('occupants')->nullable();

            //string kc kelangan string sa implode() na nasa controller
            $table->string('rides_id')->nullable(); //test
            $table->string('sports_id')->nullable();
            $table->string('cottage_id')->nullable(); // wala muna
            $table->string('fees_and_corkage_id')->nullable();
            $table->string('catering_id')->nullable(); // wala pa
            
            $table->string('type_of_accommodation')->nullable();
            $table->string('status')->nullable();
            $table->string('check_in')->nullable();
            $table->string('check_out')->nullable();
            $table->string('ref_no')->nullable();

            //$table->integer('lenght_of_stay')->nullable(); //wala pa
            $table->double('reservation_cost')->nullable();//wala pa
            $table->double('amenities_cost')->nullable();//wala pa
            $table->double('overall_amount')->nullable();//wala pa
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
        Schema::dropIfExists('reservations');
    }
}
