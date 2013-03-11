@section('content')
<h1>Create Team</h1>
<form>
Team Name: <input type="text" name="team_name">
Team Logo: <input type="file" name="team_logo"> 
Team Password: <input type="password" name="team_pword">
Website: <input type="text" name="team_website">
Team Sponsor Logo(s): <input type="file" name="team_sponsorlogo"> suggested size here
Biography: <input type="textarea" name="team_bio">

By being part of the free league you are not eligible for cash prizes.
<input type="submit" value="Join Free Now!" name="submit"/><input type="submit" value="Join Now" name="submit"/>
</form>
@stop