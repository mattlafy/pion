<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// $this->call('UserTableSeeder'=>'1',
    
    DB::table('players')->delete();
    DB::table('teams')->delete();
    DB::table('rules')->delete();
    DB::table('news')->delete();
    DB::table('maps')->delete();
    DB::table('matches')->delete();
    DB::table('weeks')->delete();
    DB::table('seasons')->delete();

    
    Map::create(array('name'=>'north america',));
    Map::create(array('name'=>'south america',));
    Map::create(array('name'=>'europe',));

    Country::create(array('name'=>'Canada',));
    Country::create(array('name'=>'Denmark',));

    Team::create(array(
      'name'=>'teampro',
      'has_image'=>true,
    ));
    
    Player::create(array(
      'is_admin'=>true,
      'alias'=>'Dicco',
      'email'=>'1',
      'password'=>'1',
      'first_name'=>'1',
      'last_name'=>'1',
      'race'=>'zerg', //'protoss', 'terran', 'zerg'
      'has_picture'=>false,
      'date_of_birth'=>'1992-02-02',
      'country'=>1,
      'city'=>'onelane',
      'province'=>'lasdf',
      'character_name'=>'nicco',
      'character_code'=>'4343',
      'team_id'=>1,
    ));
    Player::create(array(
      'is_admin'=>true,
      'alias'=>'Lafy',
      'email'=>'1',
      'password'=>'1',
      'first_name'=>'1',
      'last_name'=>'1',
      'race'=>'terran', //'protoss', 'terran', 'zerg'
      'has_picture'=>true,
      'date_of_birth'=>'1973-01-30',
      'country'=>'2',
      'city'=>'Twotown',
      'province'=>'twintario',
      'character_name'=>'lafy',
      'character_code'=>'1234',
      'team_id'=>1,
    ));
    
    
    Season::create(array(
      'open_registration'=>'2013-05-05',
      'close_registration'=>'2013-06-05',
      'start_date'=>'2013-06-09',
      'name'=>'Season 1',
      
    ));
    Week::create(array(
      'title'=>'week 1',
      'map_one'=>'1',
      'map_two'=>'2',
      'map_three'=>'3',
      'season_id'=>'1',
      'deadline'=>'2013-09-01',
    ));
    Match::create(array(
      'week_id'=>'1',
      'home_player'=>'1',
      'away_player'=>'2',
    ));
    Rule::create(array(
      'number'=>'1.1',
      'name'=>'the rule',
      'rule'=>'text',
    ));
    News::create(array(
      'topic'=>'news title!',
      'content'=>'the news goes here',
      'has_image'=>true,
      'posted_by'=>'1',
    ));
  }
}