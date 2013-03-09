<?php

class Rule extends Eloquent {
  public function dots(){
    return substr_count($this->number, '.');
  }
}

?>
