@section('content')
<h1>Join Existing Team</h1>

	<form action="join.php" method="post">
    <p>Team: <select name="team"><option>choose your team</option>
	@foreach($teams as $t)
				<option value="{{$t->id}}">{{$t->name}}</option>
	@endforeach
	</select>
		Password: <input type="password" name="team_pword"></p>

@stop