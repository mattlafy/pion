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
    Schema::create('teams', function($table){
      $table->increments('id');
      $table->timestamps();
      $table->string('name');
      $table->boolean('has_image');
    });
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
      $table->integer('country_id')->nullable();
      $table->foreign('country_id')->references('id')->on('countries');
      $table->string('city')->nullable();
      $table->string('province')->nullable();
      $table->string('character_name')->nullable();
      $table->string('character_code')->nullable();
      $table->integer('team_id')->nullable();
      $table->foreign('team_id')->references('id')->on('teams');
    });
    Schema::create('rules', function($table){
      $table->increments('id');
      $table->timestamps();
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
      $table->timestamps();
      $table->date('open_registration');
      $table->date('close_registration');
      $table->date('start_date');
      $table->string('name');
      
    });
    Schema::create('weeks', function($table){
      $table->increments('id');
      $table->timestamps();
      $table->string('title');
      $table->integer('map_one');
      $table->integer('map_two');
      $table->integer('map_three');
      $table->integer('season_id');
      $table->foreign('season_id')->references('id')->on('seasons');
      $table->date('deadline');
    });
    Schema::create('matches', function($table){
      $table->increments('id'); 
      $table->timestamps();
      $table->integer('week_id');
      $table->foreign('week_id')->references('id')->on('weeks');
      $table->integer('home_player');
      $table->foreign('home_player')->references('id')->on('players');
      $table->integer('away_player');
      $table->foreign('away_player')->references('id')->on('players');
      $table->integer('winner')->nullable();
    });
    Schema::create('maps', function($table){
      $table->increments('id');
      $table->timestamps();
      $table->string('name');
    });
    Schema::create('countries', function($table){
      $table->increments('id');
      $table->timestamps();
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
      $table->dropForeign('news_posted_by_foreign');
    });
    Schema::table('matches', function($table){
      $table->dropForeign('matches_week_id_foreign');
      $table->dropForeign('matches_home_player_foreign');
      $table->dropForeign('matches_away_player_foreign');      
    });
    Schema::table('weeks', function($table){
      $table->dropForeign('weeks_season_id_foreign');
    });
    Schema::table('players', function($table){
      $table->dropForeign('players_team_id_foreign');
      $table->dropForeign('players_country_id_foreign');
    });

    Schema::drop('players');
    Schema::drop('teams');
    Schema::drop('rules');
    Schema::drop('news');
    Schema::drop('seasons');
    Schema::drop('weeks');
    Schema::drop('matches');
    Schema::drop('maps');
    Schema::drop('countries');
	}
  
}