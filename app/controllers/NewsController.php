<?php

class NewsController extends WidgetController {
	protected $layout = 'Layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    $this->layout->content = View::make('News.list', array('news_posts'=> News::all()));
    $this->showWidgets();
  }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    $news = new News();
		$this->layout->content = View::make('News.add', array('news'=>$news));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
    $values = Input::except('id','_token');
    if(Input::hasFile('news_image')){
      $has_image = true;
    }
    else{
      $has_image = false;
    }
    $values['has_image'] = $has_image;
		$news = News::create($values);
    if($has_image){
      $this->moveImage(Input::file('news_image'),'news',$news->id);
    }
    return Redirect::to('NewsController@show', array($news->id));
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
		$news = News::find($id);
    $this->layout->nest('widget','News.add', array('news'=>$news));
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