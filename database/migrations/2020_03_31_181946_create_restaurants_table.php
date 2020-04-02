<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('logininfo_id');
            $table->integer('restaurant_type');
            $table->string('kitchen_name');
            $table->string('kitchen_city');
            $table->string('kitchen_address');
            $table->string('postal_code');
            $table->string('first_name');
            $table->string('total_restuarent');
            $table->string('average_cost');
            $table->string('food_menu');
            $table->TinyInteger('status');
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
        Schema::dropIfExists('restaurants');
    }
}
