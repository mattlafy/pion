@section('register_tab') selected @stop
@section('content')
<h1>User Registration</h1>
<h3>Personal Information</h3>
{{Form::model($player, array('action'=>'PlayerController@store','files'=>true))}}
	<div id='reg_form' class='registration_form'>
    {{Form::label('first_name', 'First Name:')}} {{Form::text('first_name')}}<br>
    {{Form::label('last_name', 'Last Name:')}} {{Form::text('last_name')}}<br>
 	Alias: <input type="text" name="alias" /><br>
  Password: <input type="password" name="pwd" /><br>
  Repeat Password: <input type="password" name="pwd2" /><br>
	Profile Picture: <input type="file" name="profile_picture"> <span class='suggested_size'>Suggested Size 168x188</span>
	Date of Birth:(year.mm.dd) <input type="text" name="year" />
		<input type="text" name="month" />
		<input type="text" name="day" />
	Country: <select name="country"><option> choose your country</option>
			@foreach($countries as $c)
				<option value="{{$c->countryid}}">{{$c->country}}</option>
			@endforeach
				</select>
	City: <input type="text" name="city" />
  State/Province: <input type="text" name="state" /></div>
<h3>Starcraft 2 Information</h3>
	Starcraft 2 Character Code: <input type="text" name="sc2_alias" />.<input type="text" name="char_code" />
	Race: <select name="race">
<option>Choose a race</option>
<option value="zerg">Zerg</option>
<option value="protoss">Protoss</option>
<option value="terran">Terran</option>
</select>

	
<p><input type="submit" value="Register Now!" name="submit"/></p>
</form>
@stop