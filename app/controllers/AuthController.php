<?php

class AuthController extends WidgetController {
  protected $layout = 'Layouts.master';
  
  public function login(){
    $this->layout->content = View::make('Auth.login');
  }
  public function check(){
    var_dump(Input::only('email', 'password'));
    var_dump(Auth::validate(Input::only('email', 'password')));
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
