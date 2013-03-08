<?php

class Team extends Eloquent {
  public function players(){
    return $this->has_many('Player');
  }
}

?>
