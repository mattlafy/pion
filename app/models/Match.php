<?php

class Match extends Eloquent {
  protected $table = 'matches';
  public function week(){
    return $this->belongsTo('Week');
  }
  public function homePlayer(){
    return $this->belongsTo('Player', 'home_player');
  }
  public function awayPlayer(){
    return $this->belongsTo('Player', 'away_player');
  }
}

?>
