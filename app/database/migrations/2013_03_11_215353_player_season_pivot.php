<?php

use Illuminate\Database\Migrations\Migration;

class PlayerSeasonPivot extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('player_season', function($table){
      $table->increments('id');
      $table->timestamps();
      $table->integer('player_id');
      $table->foreign('player_id')->references('id')->on('players');
      $table->integer('season_id');
      $table->foreign('season_id')->references('id')->on('seasons');
      $table->boolean('is_premium');
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('player_season');
	}

}