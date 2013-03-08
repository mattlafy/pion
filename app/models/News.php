<?php

class News extends Eloquent {
  protected $table = 'news';
  public function postedBy(){
    return $this->belongsTo('Player', 'posted_by');
  }
}
?>
