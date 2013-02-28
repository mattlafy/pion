<?php

class NewsController extends BaseController {
	protected $layout = 'Layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $this->layout->content = View::make('News.list', array('news_posts'=> array(
		
		(object)array('title'=>'SITE LAUNCH', 'content'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus egestas, est eget commodo dapibus, augue urna pretium purus,
et consequat leo nulla in mauris. Suspendisse eleifend elementum nunc nec tincidunt. In cursus, massa et fringilla egestas, nisi 
purus sodales enim, elementum iaculis quam nibh et massa. Vivamus ac odio sem. Morbi sed ligula ultricies nunc tempor ultricies. 
Suspendisse lectus felis, aliquet eu semper nec, ultrices eu elit. Nam molestie venenatis nisi. Aliquam ut ante erat. Sed et mi quam, 
non interdum velit. Maecenas mi neque, ultricies vitae vehicula ut, imperdiet vel mauris. Etiam id congue dolor. Nulla semper metus 
at risus auctor eu condimentum quam pellentesque. Curabitur eget velit lorem, porttitor faucibus metus. In placerat venenatis 
fringilla. Vivamus sollicitudin eros in augue eleifend rutrum ut ut orci.', 'author'=>'whoever', 'date_posted'=>'whenever'),
		(object)array('title'=>'Site down for emergency maintenance', 'content'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus egestas, est eget commodo dapibus, augue urna pretium purus,
et consequat leo nulla in mauris. Suspendisse eleifend elementum nunc nec tincidunt. In cursus, massa et fringilla egestas, nisi 
purus sodales enim, elementum iaculis quam nibh et massa. Vivamus ac odio sem. Morbi sed ligula ultricies nunc tempor ultricies. 
Suspendisse lectus felis, aliquet eu semper nec, ultrices eu elit. Nam molestie venenatis nisi. Aliquam ut ante erat. Sed et mi quam, 
non interdum velit. Maecenas mi neque, ultricies vitae vehicula ut, imperdiet vel mauris. Etiam id congue dolor. Nulla semper metus 
at risus auctor eu condimentum quam pellentesque. Curabitur eget velit lorem, porttitor faucibus metus. In placerat venenatis 
fringilla. Vivamus sollicitudin eros in augue eleifend rutrum ut ut orci.', 'author'=>'whoelse', 'date_posted'=>'whenever2'),
		(object)array('title'=>'8 week period...bloody.', 'content'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus egestas, est eget commodo dapibus, augue urna pretium purus,
et consequat leo nulla in mauris. Suspendisse eleifend elementum nunc nec tincidunt. In cursus, massa et fringilla egestas, nisi 
purus sodales enim, elementum iaculis quam nibh et massa. Vivamus ac odio sem. Morbi sed ligula ultricies nunc tempor ultricies. 
Suspendisse lectus felis, aliquet eu semper nec, ultrices eu elit. Nam molestie venenatis nisi. Aliquam ut ante erat. Sed et mi quam, 
non interdum velit. Maecenas mi neque, ultricies vitae vehicula ut, imperdiet vel mauris. Etiam id congue dolor. Nulla semper metus 
at risus auctor eu condimentum quam pellentesque. Curabitur eget velit lorem, porttitor faucibus metus. In placerat venenatis 
fringilla. Vivamus sollicitudin eros in augue eleifend rutrum ut ut orci.', 'author'=>'nobody', 'date_posted'=>'whenever3')
		
		
		)));
            $this->layout->nest('widget','Map.delete');
            $this->layout->nest('widget2','Map.list');
            $this->layout->nest('widget3','Rules.delete');
            $this->layout->nest('widget3','Match.w_list');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$this->layout->content = View::make('News.add', array('topic'=>'', 'content'=>'', 'id'=>''));
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