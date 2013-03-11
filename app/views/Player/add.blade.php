@section('register_tab') selected @stop
@section('content')
<h1>User Registration</h1>
<h3>Personal Information</h3>
{{Form::model($player, array('action'=>'PlayerController@store','files'=>true))}}
	<div id='reg_form' class='registration_form'>
    {{Form::label('first_name', 'First Name:')}} {{Form::text('first_name')}}<br>
    {{Form::label('last_name', 'Last Name:')}} {{Form::text('last_name')}}<br>
    {{Form::label('alias', 'Alias:')}} {{Form::text('alias')}}<span class='suggested_size'>Will be your username on the site</span><br>
    {{Form::label('email', 'Email:')}} {{Form::text('email')}}<br>
    {{Form::label('password', 'Password:')}} {{Form::password('password')}}<br>
    {{Form::label('password_repeat', 'Repeat Password:')}} {{Form::password('password_repeat')}}<br>
    {{Form::label('profile_picture', 'Profile Picture:')}}{{Form::file('profile_picture')}}<span class='suggested_size'>Suggested Size 168x188</span><br>
    {{Form::label('date_of_birth', 'Date of Birth:(year.mm.dd)')}}{{Form::text('date_of_birth')}}
    {{Form::label('countries', 'Country:')}}{{Form::select('country', $countries)}}
    {{Form::label('city', 'City:')}} {{Form::text('city')}}
    {{Form::label('state_province', 'State/Province:')}}{{Form::text('state_province')}}
	
  
<h3>Starcraft 2 Information</h3>
	Starcraft 2 Character Code: <input type="text" name="sc2_alias" />.<input type="text" name="char_code" />
	Race: <select name="race">
<option>Choose a race</option>
<option value="zerg">Zerg</option>
<option value="protoss">Protoss</option>
<option value="terran">Terran</option>
</select>
	
<p><input type="submit" value="Register Now!" name="submit"/></p>
  </div>
{{Form::close()}}
@stop