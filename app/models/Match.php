<?php

class Match extends Eloquent {
  protected $table = 'matches';
  public function week(){
    return $this->belongs_to('Week');
  }
  public function home_player(){
    return $this->belongs_to('Player', 'home_player');
  }
  public function away_player(){
    return $this->belongs_to('Player', 'away_player');
  }
}

?>
