<?php

class PlayerController extends WidgetController {
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
        $this->layout->content = View::make('Player.list', array('players' => Player::all()));
        
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{ 
    $player = new Player();
		$this->layout->content = View::make('Player.add', array('player'=>$player,'countries'=> Country::lists('name','id')));
		//
	}
	/**
	 * Show the listing of standings.     
	 *
	 * @return Response
	 */
	public function standings()
	{
		$this->layout->content = View::make('Player.standings', array('players'=> Player::all()));
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
    $p = Player::where('alias', '=', $id)->first();
		$this->layout->content = View::make('Player.show', array('player' => $p));
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