<?php

class PlayerController extends BaseController {
	protected $layout = 'Layouts.master';
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($search = '')
	{
		// search database for players where $search is in name
		//$p = new PlayerModel();
		//$players = $p->list($search);
        $this->layout->content = View::make('Player.list', array('players' => array(
		
		(object)array('name'=>'Richard Dicks','alias'=>'Dicco','race'=>'Black and Proud','team'=>'Winnorz','country'=>'Canada','rank'=>'1st'),
		(object)array('name'=>'Ricks Dews','alias'=>'Fddfcco','race'=>'Zerg','team'=>'Witrz','country'=>'Canada','rank'=>'4st'),
		(object)array('name'=>'Ricks Goom','alias'=>'Mooopo','race'=>'Terran','team'=>'PLCz','country'=>'Canada','rank'=>'41st')
		
		
		)));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('Player.add', array('countries'=>array((object)array('countryid'=>1,'country'=>'Canada'))));
		//
	}
	/**
	 * Show the listing of standings.
	 *
	 * @return Response
	 */
	public function standings()
	{
		$this->layout->content = View::make('Player.standings', array('players'=>array((object)array('rank'=>'1','alias'=>'dicco','race'=>'car','team'=>'blasdh','matches_played'=>4,'wins'=>3039,'losses'=>349,'streak'=>4,'last_five_games'=>49,'games_won'=>590,'games_lost'=>20,'plus_minus'=>503))));
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
		$this->layout->content = View::make('Player.show');
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