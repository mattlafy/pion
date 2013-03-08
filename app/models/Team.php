<?php

class Team extends Eloquent {
  public function players(){
    return $this->hasMany('Player');
  }
}

?>
