<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_events', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('menu_id')->unsigned;
			$table->integer('event_id')->unsigned;
			$table->integer('cantidad');
			$table->string('comentario')->nullable;
			
			$table->foreign('event_id')->references('menu_id')->on('events');
			$table->foreign('menu_id')->references('id')->on('menus');
			
			
			
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
        Schema::dropIfExists('menu_events');
    }
}
