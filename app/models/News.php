<?php

class News extends Eloquent {
  protected $table = 'news';
  public function posted_by(){
    return $this->belongsTo('Player', 'posted_by');
  }
}
?>
