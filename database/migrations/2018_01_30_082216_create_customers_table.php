<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
           // $table->integer('reservation_id');
            $table->string('name', 30);
            $table->string('email', 25);// ->unique();
            $table->string('mobile_no', 11); //->unique();
            $table->string('company_group', 50);
            $table->date('present_date', 'm-d-Y');
            $table->date('date_of_tour', 'm-d-Y');
            $table->date('quote_date', 'm-d-Y');
            $table->string('no_of_person');
            $table->string('address_tin', 55);
            $table->string('reservation_type');
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
        Schema::dropIfExists('customers');
    }
}
