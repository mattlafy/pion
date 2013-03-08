<?php

class Country extends Eloquent {
  protected $table = 'countries';
  public function players(){
    return $this->has_many('Player');
  }
}
?>
