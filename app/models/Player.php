<?php

class Player extends Eloquent {
  public function country(){
    return $this->belongs_to('Country');
  }
  public function team(){
    return $this->belongs_to('Team');
  }
  public function news_posts(){
    return $this->has_many('News', 'posted_by');
  }
}

?>
