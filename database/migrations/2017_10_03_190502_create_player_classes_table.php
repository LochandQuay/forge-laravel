<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('icon_url');
            $table->timestamps();
        });

        Schema::table('decks', function($table) {
          $table->foreign('class_id')->references('id')->on('player_classes');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_classes');
    }
}
