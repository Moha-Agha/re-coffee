<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoffeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffees', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('billed');
            $table->integer('price');
            $table->enum('size', ['single', 'double']);
            $table->integer('drinkerId')->unsigned();
            $table->foreign('drinkerId')->references('id')->on('drinkers');
            $table->integer('reportId')->unsigned();
            $table->foreign('reportId')->references('id')->on('reports');
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
        Schema::dropIfExists('coffee');
    }
}
