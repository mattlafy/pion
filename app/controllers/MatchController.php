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
		$this->layout->content = View::make('Match.list', array('matches'=> array( Match::all())));
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
  
    $this->layout->content = View::make('Match.show', array(
        'player1'=> (object)array('first_name'=>'Nicholas', 'last_name'=>'Dicks', 'id'=>'imghere', 'alias'=>'NICCO', 'career_record'=>'(250-103)', 'race'=>'zerg', 'team_id'=>'teamid', 'team'=>'teamname', 'age'=>'26', 'rank'=>'1st', 'country'=>'Canada', 'season_record'=>'5-0', 'streak'=>'1W'),
        'player2'=> (object)array('first_name'=>'Matt', 'last_name'=>'Lafreniere', 'alias'=>'LaFyTaFFy', 'id'=>'imghere', 'career_record'=>'(5-3)', 'race'=>'protoss', 'team_id'=>'teamid', 'team'=>'teamname', 'age'=>'26', 'rank'=>'1st', 'country'=>'China', 'season_record'=>'4-1', 'streak'=>'1L'),  
        'maps'=> (object)array('map1'=>'imghere', 'map2'=>'imghere'),
        ));

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
