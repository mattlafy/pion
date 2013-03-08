<?php

class Week extends Eloquent {
  public function season(){
    return $this->belongsTo('Season');
  }
  public function matches(){
    return $this->hasMany('Match');
  }
  public function map_one(){
    return $this->belongsTo('Map', 'map_one');
  }
  public function map_two(){
    return $this->belongsTo('Map', 'map_two');
  }
  public function map_three(){
    return $this->belongsTo('Map', 'map_three');
  }
}

?>
