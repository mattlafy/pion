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
  public function age(){
    $d1 = new DateTime($this->date_of_birth);
    $d2 = new DateTime();
    $diff = $d2->diff($d1);
    return $diff->y;
  }
}

?>
