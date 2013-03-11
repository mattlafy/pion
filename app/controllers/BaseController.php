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
    $destination = 'images/'.$type;
    $filename = $id.".png";
    if($file->getMimeType() != 'image/png'){
      // must convert
      imagepng(imagecreatefromstring(file_get_contents($file->getRealPath())), $destination.'/'.$filename);
    }
    else{
      $file->move($destination, $filename);
    }
  }
}