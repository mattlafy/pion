<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
  protected function moveImage($file, $type, $id){
    $root = '';
    if($file->getMimeType() != 'image/png'){
      // must convert
    }
    
  }
  protected function makePng($file){
    
  }
}