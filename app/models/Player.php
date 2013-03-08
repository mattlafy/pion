<?php

class Player extends Eloquent {
  protected $hidden = array('password');
  public function country(){
    return $this->belongsTo('Country');
  }
  public function team(){
    return $this->belongsTo('Team');
  }
  public function newsPosts(){
    return $this->hasMany('News', 'posted_by');
  }
}

?>
