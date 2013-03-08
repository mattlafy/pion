<?php

class Player extends Eloquent {
  public function country(){
    return $this->belongsTo('Country');
  }
  public function team(){
    return $this->belongsTo('Team');
  }
  public function news_posts(){
    return $this->hasMany('News', 'posted_by');
  }
}

?>
