@section('register_tab') selected @stop
@section('content')
<h1>User Registration</h1><br>
<h3>Personal Information</h3>
{{Form::model($player, array('action'=>'PlayerController@store','files'=>true))}}
	<div id='reg_form' class='registration_form'>
    {{Form::label('first_name', 'First Name:')}} {{Form::text('first_name')}}<br>
    {{Form::label('last_name', 'Last Name:')}} {{Form::text('last_name')}}<br>
    {{Form::label('alias', 'Alias:')}} {{Form::text('alias')}}<span class='suggested_size'>Will be your username on the site</span><br>
    {{Form::label('email', 'Email:')}} {{Form::email('email')}}<br>
    {{Form::label('password', 'Password:')}} {{Form::password('password')}}<br>
    {{Form::label('password_repeat', 'Repeat Password:')}} {{Form::password('password_repeat')}}<br>
    {{Form::label('profile_picture', 'Profile Picture:')}} {{Form::file('profile_picture')}}<span class='suggested_size'>Suggested Size 168x188</span><br>
    {{Form::label('date_of_birth', 'Date of Birth:')}} {{Form::text('date_of_birth')}}<span class='suggested_size'>year.mm.dd</span><br>
    {{Form::label('countries', 'Country:')}} {{Form::select('country', $countries)}}<br>
    {{Form::label('city', 'City:')}} {{Form::text('city')}}<br>
    {{Form::label('state_province', 'State/Province:')}} {{Form::text('state_province')}}<br><br><br>
	
  
<h3>Starcraft 2 Information</h3>
{{Form::label('character_name', 'Character Code:')}} {{Form::text('character_name')}}#<span class='character_code'>{{Form::text('character_code')}}</span><br><span class='important'>Find your Character code by hovering your mouse over your character portrait on battle.net, Example: Name#999</span><br>
{{Form::label('race', 'Race:'}} {Form::select('race', array('zerg'=>'Zerg', 'protoss'=>'Protoss', 'terran'=>'Terran'));	

<input type="submit" value="Register Now!" name="submit"/></p>
  </div>
{{Form::close()}}
@stop