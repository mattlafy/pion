<?php

use Illuminate\Database\Migrations\Migration;

class InitStarleague extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('players', function($table){
      $table->increments('id');
      $table->timestamps();
      $table->boolean('is_admin');
      $table->string('alias');
      $table->string('email');
      $table->string('password');
      $table->string('first_name');
      $table->string('last_name');
      $table->enum('race', array('protoss', 'terran', 'zerg'))->nullable();
      $table->boolean('has_picture');
      $table->date('date_of_birth')->nullable();
      $table->integer('country')->nullable();
      $table->string('city')->nullable();
      $table->string('province')->nullable();
      $table->string('character_name')->nullable();
      $table->string('character_code')->nullable();
    });
    Schema::create('rules', function($table){
      $table->increments('id');
      $table->string('number');
      $table->string('name');
      $table->text('rule');
    });
    Schema::create('news', function($table){
      $table->increments('id');
      $table->timestamps();
      $table->string('topic');
      $table->text('content');
      $table->boolean('has_image');
      $table->integer('posted_by');
      $table->foreign('posted_by')->references('id')->on('players');
    });
    Schema::create('seasons', function($table){
      $table->increments('id');
    });
    Schema::create('matches', function($table){
      $table->increments('id'); 
      $table->string('title'); // ex. week 1
      $table->integer('season_id');
      $table->foreign('season_id')->references('id')->on('seasons');
      $table->integer('home_player');
      $table->foreign('home_player')->references('id')->on('players');
      $table->ingeger('away_player');
      $table->foreign('away_player')->references('id')->on('players');
      $table->date('deadline');
      $table->boolean('submitted');
      $table->integer('winner');
    });
    Schema::create('maps', function($table){
      $table->increments('id');
      $table->string('name');
    });
    
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    Schema::table('news', function($table){
      $table->drop_foreign('news_posted_by_foreign');
    });
    Schema::table('matches', function($table){
      $table->drop_foreign('matches_season_id_foreign');
      $table->drop_foreign('matches_home_player_foreign');
      $table->drop_foreign('matches_away_player_foreign');      
    });

    Schema::drop('players');
    Schema::drop('rules');
    Schema::drop('news');
    Schema::drop('seasons');
    Schema::drop('matches');
    
	}
  
}