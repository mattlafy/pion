<?php

class Week extends Eloquent {
  public function season(){
    return $this->belongs_to('Season');
  }
  public function matches(){
    return $this->has_many('Match');
  }
  public function map_one(){
    return $this->belongs_to('Map', 'map_one');
  }
  public function map_two(){
    return $this->belongs_to('Map', 'map_two');
  }
  public function map_three(){
    return $this->belongs_to('Map', 'map_three');
  }
}

?>
