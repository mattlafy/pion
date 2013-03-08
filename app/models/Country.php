<?php

class Country extends Eloquent {
  protected $table = 'countries';
  public function players(){
    return $this->hasMany('Player');
  }
}
?>
