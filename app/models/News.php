<?php

class News extends Eloquent {
  protected $table = 'news';
  public function posted_by(){
    return $this->belongs_to('Player', 'posted_by');
  }
}
?>
