<?php

class WidgetController extends BaseController {
  protected function showWidgets(){
    $i = 0;
    $this->layout->nest('widget'.$i++,'Season.prizelist');
    $this->layout->nest('widget'.$i++,'Match.w_list');

    $progress = array();
    $progress['register'] = 'pending';
    $progress['season'] = 'pending';
    $progress['premium'] = 'pending';
    $progress['create_team'] = 'pending';
    $progress['join_team'] = 'pending';
    
    if(Auth::check()){
      $progress['register'] = 'checked';
      $user = Auth::user();
      if($user->seasons()->first() == Season::orderBy('start_date', 'desc')->first()){
        $progress['season'] = 'checked';
        if($user->seasons()->first()->pivot->is_premium){
          $progress['premium'] = 'checked';
        }
        else{
          $progress['premium'] = 'in_progress';
        }
      }
      else{
        $progress['season'] = 'in_progress';
      }
      if($user->team != null){
        $progress['create_team'] = 'checked';
        $progress['join_team'] = 'checked';
      }
      elseif($progress['season'] != 'in_progress' && $progress['premium'] != 'in_progress'){
        $progress['create_team'] = 'in_progress';
      }
    }
    else{
      $progress['register'] = 'in_progress';
    }
    $this->layout->nest('widget'.$i++,'Player.w_progress', array('progress' => (object)$progress));
  }
}

?>
