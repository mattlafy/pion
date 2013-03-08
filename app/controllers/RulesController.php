<?php

class RulesController extends BaseController {
	protected $layout = 'Layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $this->layout->content = View::make('Rules.list', array('rules' => array(
		
		(object)array('dots'=>'0','title'=>'Section 1','text'=>'Dont be a wanker','rule'=>'1'),
		(object)array('dots'=>'1','title'=>'Definitions','text'=>'a wanker is defined as someone who wanks in public','rule'=>'1.1'),
		(object)array('dots'=>'0','title'=>'Section 2','text'=>'Have fun','rule'=>'2'),
		(object)array('dots'=>'1','title'=>'Mandate','text'=>'Fun is legally mandated','rule'=>'2.1'),
		(object)array('dots'=>'2','title'=>'sub-point','text'=>'Dont poop in the pool','rule'=>'2.1.1'),
		
		
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
		$this->layout->content = View::make('Rules.add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
    $r = new Rule();
    $r->number = "1.1";
    $r->name = "rule1";
    $r->rule = "big long piece of text";
    $r->save();
    
	}

	/**
	 * Display the specified resource.
	 *
	 * @return Response
	 */
	public function show($id)
	{
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