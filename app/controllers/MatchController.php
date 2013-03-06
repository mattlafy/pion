<?php

class MatchController extends BaseController {
	protected $layout = 'Layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->layout->content = View::make('Match.list', array('matches'=> array(
        (object)array('home_team'=>'team1', 'away_team'=>'team2','date'=>'march13/2013','map_1'=>'mapname1','map_2'=>'mapname2','map_3'=>'mapname3','id'=>'303030'),
        (object)array('home_team'=>'team1', 'away_team'=>'team2','date'=>'march13/2013','map_1'=>'mapname1','map_2'=>'mapname2','map_3'=>'mapname3','id'=>'303030'),
        (object)array('home_team'=>'team1', 'away_team'=>'team2','date'=>'march13/2013','map_1'=>'mapname1','map_2'=>'mapname2','map_3'=>'mapname3','id'=>'303030'),
        
      )));
//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @return Response
	 */
	public function show($id)
	{
    
    $this->layout->content = View::make('Match.view', array(
        'player1'=> (object)array('first_name'=>'Nick', 'last_name'=>'Dicks', 'id'=>'imghere', 'alias'=>'dicco', 'career_record'=>'200-3', 'race'=>'zerg', 'team_id'=>'teamid', 'team'=>'teamname', 'age'=>'26', 'rank'=>'1st', 'country'=>'canada', 'season_record'=>'5-0', 'streak'=>'1W'),
        'player2'=> (object)array('first_name'=>'Matt', 'last_name'=>'Lafy', 'alias'=>'lafytaffy', 'id'=>'imghere', 'career_record'=>'200-3', 'race'=>'terran', 'team_id'=>'teamid', 'team'=>'teamname', 'age'=>'26', 'rank'=>'1st', 'country'=>'canada', 'season_record'=>'4-1', 'streak'=>'1L'),  
        'maps'=> (object)array('map1'=>'imghere', 'map2'=>'imghere'),
        ));

//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}