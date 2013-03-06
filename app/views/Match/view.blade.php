@section('content')
<h1>Match Preview</h1>
<table id="match_preview">
	<tr>
		<td rowspan="10"><img src="images/teams/{{$player1->team_id}}.png" alt="Player 1 Team Logo" /></td>
		<td rowspan="10"><img src="images/players/{{$player1->id}}.png" alt="Player 1 Avatar" /></td>
		<td class="name">{{$player1->first_name}}</td>
		<td colspan="2">vs</td>
		<td class="name">{{$player2->first_name}}</td>
		<td rowspan="10"><img src="images/players/{{$player2->id}}.png" alt="Player 2 Avatar" /></td>
		<td rowspan="10"><img src="images/teams/{{$player2->team_id}}.png" alt="Player 2 Team Logo" /></td>
	</tr>
	<tr>
		<td class="name">{{$player1->last_name}}</td>
		<td colspan="2" rowspan="10">
			<table>
				<tr><td>Map1</td><td>Map2</td><td>Map3</td></tr>
				<tr><td colspan="3"><img src="images/maps/{{$maps->map1}}.png" Alt="Map1"></td></tr>
				<tr><td>Map4</td><td>Map5</td><td>Map6</td></tr>
				<tr><td></td><td>Map7</td><td></td></tr>
			</table>
		</td>
		<td class="name">{{$player2->last_name}}</td>
	</tr>
	<tr>
		<td class="alias">{{$player1->alias}}</td>
		<td class="alias">{{$player2->alias}}</td>
	</tr>
	<tr>
		<td class="stat">{{$player1->career_record}}</td>
		<td class="stat">{{$player2->career_record}}</td>
	</tr>
	<tr>
		<td class="bio_title">Team</td>
		<td class="bio_title">Team</td>
	</tr>
	<tr>
		<td class="bio_info">{{$player1->team}}</td>
		<td class="bio_info">{{$player2->team}}</td>
	</tr>
	<tr>
		<td class="bio_title">Age</td>
		<td class="bio_title">Age</td>
	</tr>
	<tr>
		<td class="bio_info">{{$player1->age}}</td>
		<td class="bio_info">{{$player2->age}}</td>
	</tr>
	<tr>
		<td class="bio_title">Division Rank</td>
		<td class="bio_title">Division Rank</td>
	</tr>
	<tr>
		<td class="bio_info">{{$player1->rank}}</td>
		<td class="bio_info">{{$player2->rank}}</td>
	</tr>
	<tr>
		<td rowspan="5" colspan="2"><!--Keys to Victory--></td>
		<td rowspan="2"><img src="/l4/images/races/{{$player1->race}}.png" alt="Player 1 Race" /></td>
		<td rowspan="2"><img src="/l4/images/races/{{$player2->race}}.png" alt="Player 2 Race" /></td>
		<td rowspan="5" colspan="2"><!--Keys to Victory--></td>
	</tr>
	<tr>
		<td class="title" colspan="2">Race</td>
	</tr>
	<tr>
		<td><img src="images/countries/{{$player1->country}}.png" alt="Player 1 flag" /></td>
		<td class="title" colspan="2">Country</td>
		<td><img src="images/countries/{{$player2->country}}.png" alt="Player 2 flag" /></td>
	</tr>
	<tr>
		<td class="stat">{{$player1->season_record}}</td>
		<td class="title" colspan="2">Season Record</td>
		<td class="stat">{{$player2->season_record}}</td>
	</tr>
	<tr>
		<td class="stat">{{$player1->streak}}</td>
		<td class="title" colspan="2">streak</td>
		<td class="stat">{{$player2->streak}}</td>
	</tr>
	<!--
	<tr>
		<td colspan="3" rowspan="2">95%</td>
		<td class="title" colspan="2">predictions</td>
		<td colspan="3" rowspan="2">5%</td>
	</tr>
	<tr>
		<td colspan="2">vote now</td>
	</tr>
	<tr>
		<td colspan="4">Advanced Match Stats</td>
		<td colspan="4">Advanced Match Stats</td>
	</tr>
	-->
</table>
@stop
