<?php

class AuthController extends WidgetController {
  protected $layout = 'Layouts.master';
  
  public function login(){
    $this->layout->content = View::make('Auth.login');
  }
  public function check(){
    print "test";
    if(Auth::validate(Input::only('email', 'password'))){
      Redirect::to('/');
    }
    else{
      Redirect::to('/login');
    }
  }
  public function logout(){
    Auth::logout();
    Redirect::to('/');
  }
}
?>
