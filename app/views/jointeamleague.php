<!DOCTYPE html>
<html>
<html>
<head>
<title>Join Not Named Team League</title>
</head>
<body>

<?php include("nav.html"); ?>
		<h1>Join Not Named Team League</h1>
			<h3>Join Existing Team</h3>
		<form action="jointeamleague.php" method="post">
		<p>Team: <select name="team"><option>choose your team</option>
	@foreach($teams as $t)
				<option value="{{$t->id}}">{{$t->name}}</option>
	@endforeach
	</select>
		Password: <input type="password" name="team_pword"></p>
		
		<h3>Create Team</h3>
		<p>Team Name: <input type="text" name="team_name"></p>
		<p>Team Logo: <input type="file" name="team_logo"> suggested size here</p>
		<p>Team Password: <input type="password" name="team_pword"></p>
		<p>Country: <select name="country"><option> choose your country</option>
			@foreach($countries as $c)
				<option value="{{$c->countryid}}">{{$c->"country"}}</option>
			@endforeach
				</select>
		<p>Website: <input type="text" name="team_website"></p>
		<p>Team Sponsor Logo(s): <input type="file" name="team_sponsorlogo"> suggested size here</p>
		<p>Biography: <input type="textarea" name="team_bio"></p>
		
		
		<input type="submit" value="Join Free!" name="submit"/><input type="submit" value="Join Now" name="submit"/></p>
		</form>
		</body>
</html>