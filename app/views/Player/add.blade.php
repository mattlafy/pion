@section('content')
<h1>User Registration</h1>
<h3>Personal Information</h3>
<form action="registration.php" method="post">
	<p>First Name: <input type="text" name="first_name" /></p>
	<p>Last Name: <input type="text" name="last_name" /></p>
 	<p>Alias: <input type="text" name="alias" /></p>
	<p>Password: <input type="password" name="pwd" /></p>
        <p>Repeat Password: <input type="password" name="pwd2" /></p>
	<p>Profile Picture: <input type="file" name="profile_picture"> Suggested Size here</p>
	<p>Date of Birth:(year.mm.dd) <input type="text" name="year" />
		<input type="text" name="month" />
		<input type="text" name="day" /></p>
	<p>Country: <select name="country"><option> choose your country</option>
			@foreach($countries as $c)
				<option value="{{$c->countryid}}">{{$c->country}}</option>
			@endforeach
				</select></p>
	<p>City: <input type="text" name="city" /></p>
        <p>State/Province: <input type="text" name="state" /></p>
<h3>Starcraft 2 Information</h3>
	<p>Starcraft 2 Character Code: <input type="text" name="sc2_alias" />.<input type="text" name="char_code" /></p>
	<p>Race: <select name="race">
<option>Choose a race</option>
<option value="zerg">Zerg</option>
<option value="protoss">Protoss</option>
<option value="terran">Terran</option>
</select></p>

	
<p><input type="submit" value="Register Now!" name="submit"/></p>
</form>
@stop