<?php

class Match extends Eloquent {
  protected $table = 'matches';
  public function week(){
    return $this->belongsTo('Week');
  }
  public function home_player(){
    return $this->belongsTo('Player', 'home_player');
  }
  public function away_player(){
    return $this->belongsTo('Player', 'away_player');
  }
}

?>
