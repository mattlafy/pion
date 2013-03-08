<?php

class Week extends Eloquent {
  public function season(){
    return $this->belongsTo('Season');
  }
  public function matches(){
    return $this->hasMany('Match');
  }
  public function mapOne(){
    return $this->belongsTo('Map', 'map_one');
  }
  public function mapTwo(){
    return $this->belongsTo('Map', 'map_two');
  }
  public function mapThree(){
    return $this->belongsTo('Map', 'map_three');
  }
}

?>
