<?php

class WidgetController extends BaseController {
  protected function showWidgets(){
    $i = 0;
    $this->layout->nest('widget'.$i++,'Map.delete');
    $this->layout->nest('widget'.$i++,'Map.list');
    $this->layout->nest('widget'.$i++,'Rules.delete');
    $this->layout->nest('widget'.$i++,'Match.w_list');
    $this->layout->nest('widget'.$i++,'News.add', array('topic'=>'some topic','content'=>'some content'));
    $this->layout->nest('widget'.$i++,'Player.w_progress');
  }
}

?>