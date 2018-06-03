<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicals', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('vahical_name_with_year');
            $table->string('imagepath1');
            $table->string('imagepath2');
            $table->string('imagepath3');
            $table->string('imagepath4');
            $table->string('imagepath5');
            $table->string('brand');
            $table->string('model_year');
            $table->string('condition');
            $table->string('transmission');
            $table->string('model');
            $table->string('body_type');
            $table->string('fuel_type');
            $table->string('engine_capacity');
            $table->string('mileage');
            $table->string('price');
            $table->string('contact');
            $table->string('address');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicals');
    }
}
