<?php

class AuthController extends WidgetController {
  protected $layout = 'Layouts.master';
  
  public function login(){
    $this->layout->content = View::make('Auth.login');
  }
  public function check(){
    if(Auth::validate(Input::only('email', 'password'))){
      return Redirect::to('/');
    }
    else{
      return Redirect::to('/login');
    }
  }
  public function logout(){
    Auth::logout();
    return Redirect::to('/');
  }
}
?>
