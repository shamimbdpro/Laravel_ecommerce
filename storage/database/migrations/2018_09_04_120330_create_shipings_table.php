<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipings', function (Blueprint $table) {
            $table->increments('shiping_id');
            $table->string('shiping_name');
            $table->string('shiping_email');
            $table->string('shiping_phone');
            $table->string('shiping_address1');
            $table->string('shiping_address2');
            $table->string('shiping_post');
            $table->string('shiping_country');
            $table->string('shiping_city');
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
        Schema::dropIfExists('shipings');
    }
}
