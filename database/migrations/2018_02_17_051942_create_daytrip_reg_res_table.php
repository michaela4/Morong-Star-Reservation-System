<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaytripRegResTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daytrip_reg_res', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('occupants')->nullable();
            $table->integer('rides_id')->nullable();
            $table->integer('sports_id')->nullable();
            $table->integer('cottage_id')->nullable(); 
            $table->integer('fees_and_corkage_id')->nullable();
            $table->integer('catering_id')->nullable(); // exceeds scope
            $table->string('status')->nullable();
            $table->integer('lenght_of_stay')->nullable(); //none yet
            $table->double('reservation_cost')->nullable();//none yet
            $table->double('amenities_cost')->nullable();//none yet
            $table->double('overall_amount')->nullable();//none yet
            
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
        Schema::dropIfExists('daytrip_reg_res');
    }
}
