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
            $table->boolean('billed')->default(false);
            $table->integer('price');
            $table->enum('size', ['single', 'double']);
            $table->integer('report_id')->unsigned()->nullable();
            $table->integer('drinker_id')->unsigned();
            $table->timestamps();

        });
         Schema::table('coffees', function (Blueprint $table) { 
            $table->foreign('report_id')->references('id')->on('reports');
            $table->foreign('drinker_id')->references('id')->on('drinkers');
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
