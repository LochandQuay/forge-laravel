<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('card_id');
            $table->string('dbf_id');
            $table->string('name');
            $table->string('card_set');
            $table->string('type');
            $table->string('faction');
            $table->string('rarity');
            $table->integer('cost');
            $table->integer('attack')->nullable();
            $table->integer('health')->nullable();
            $table->integer('armor')->nullable();
            $table->string('text')->nullable();
            $table->string('flavor');
            $table->string('artist');
            $table->boolean('collectible');
            $table->boolean('elite');
            $table->string('race');
            $table->string('player_class');
            $table->string('img');
            $table->string('img_gold');
            $table->string('how_to_get')->nullable();
            $table->string('how_to_get_gold')->nullable();
            $table->string('locale');
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
        Schema::dropIfExists('cards');
    }
}