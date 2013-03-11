<?php

class WidgetController extends BaseController {
  protected function showWidgets(){
    $i = 0;
    $this->layout->nest('widget'.$i++,'Season.prizelist');
    $this->layout->nest('widget'.$i++,'Match.w_list');

    $progress = array();
    if(Auth::check()){
      $progress['register'] = true;
      $user = Auth::user();
      if($user->team != null){
        $progress['team'] = true;
      }
    }
    $this->layout->nest('widget'.$i++,'Player.w_progress', array('progress' => (object)$progress));
  }
}

?>
