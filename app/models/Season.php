<?php

class Season extends Eloquent {
  public function weeks(){
    return $this->hasMany('Week');
  }
  public function players(){
    return $this->belongsToMany('Player');
  }
}
?>
