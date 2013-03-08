<?php

class Season extends Eloquent {
  public function weeks(){
    return $this->hasMany('Week');
  }
}
?>
