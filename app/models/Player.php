<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Player extends Eloquent implements UserInterface, RemindableInterface {
  protected $hidden = array('password');
  public function country(){
    return $this->belongsTo('Country');
  }
  public function team(){
    return $this->belongsTo('Team');
  }
  public function newsPosts(){
    return $this->hasMany('News', 'posted_by');
  }
  public function age(){
    $d1 = new DateTime($this->date_of_birth);
    $d2 = new DateTime();
    $diff = $d2->diff($d1);
    return $diff->y;
  }
  public function seasons(){
    return $this->belongsToMany('Season')->all()->orderBy('start_date','desc');
  }
  
  
  /**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}
}

?>
