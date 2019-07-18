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
            $table->increments('id');
            $table->string('name', 191);
            $table->string('type', 100);
            $table->string('phone', 30);
            $table->string('cellphone', 30);
            $table->string('whatsup', 30);
            $table->string('img_url', 191);
            $table->string('address', 191);
            $table->string('lat', 80);
            $table->string('lng', 80);
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
