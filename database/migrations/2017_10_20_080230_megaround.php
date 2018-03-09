<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Megaround extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('megaround', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('round_id');
            $table->dateTime('start_time');
            $table->dateTime('end_time'); 
            $table->timestamps();
            $table->foreign('round_id')->references('round_id')->on('round');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('megaround');
    }
}
