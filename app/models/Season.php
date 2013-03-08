<?php

class Season extends Eloquent {
  public function weeks(){
    return $this->has_many('Week');
  }
}
?>
