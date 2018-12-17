<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuAlimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_aliments', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('aliment_id')->unsigned;
			$table->integer('menu_id')->unsigned;
            $table->timestamps();	
			
			$table->foreign('aliment_id')->references('id')->on('aliments');
			$table->foreign('menu_id')->references('id')->on('menus');
		 
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_aliments');
    }
}
