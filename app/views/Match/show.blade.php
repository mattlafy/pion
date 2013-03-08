@section('content')
<h1>Match Preview</h1>
<table id="match_preview">
	<tr>
		<td rowspan="10" class="team_img"><img src="images/teams/{{$player1->team_id}}.png" alt="Player 1 Team Logo" /></td>
		<td rowspan="10" class="player_img"><img src="images/players/{{$player1->id}}.png" alt="Player 1 Avatar" /></td>
		<td class="name right">{{$player1->first_name}}</td>
		<td class="title center" colspan="2" rowspan="2">vs</td>
		<td class="name">{{$player2->first_name}}</td>
		<td rowspan="10" class="player_img"><img src="images/players/{{$player2->id}}.png" alt="Player 2 Avatar" /></td>
		<td rowspan="10" class="team_img"><img src="images/teams/{{$player2->team_id}}.png" alt="Player 2 Team Logo" /></td>
	</tr>
	<tr>
		<td class="name right">{{$player1->last_name}}</td>
	
		<td class="name">{{$player2->last_name}}</td>
	</tr>
	<tr>
		<td class="alias center">{{$player1->alias}}</td>
    	<td class="map" colspan="2" rowspan="9">
			<table>
        
				<tr><td class="map_table center">Map1</td><td class="map_table center">Map2</td><td class="map_table center">Map3</td></tr>
				<tr><td class="" colspan="3"><img src="/l4/images/mapidea.png" Alt="Map1"></td></tr>
				<tr><td class="map_table center">Map4</td><td class="map_table center">Map5</td><td class="map_table center">Map6</td></tr>
				<tr><td></td><td class="map_table center">Map7</td><td></td></tr>
			</table>
		</td>
		<td class="alias center">{{$player2->alias}}</td>
	</tr>
	<tr>
		<td class="record center">{{$player1->career_record}}</td>
		<td class="record center">{{$player2->career_record}}</td>
	</tr>
	<tr>
		<td class="bio_title right">Team</td>
		<td class="bio_title">Team</td>
	</tr>
	<tr>
		<td class="bio_info right">{{$player1->team}}</td>
		<td class="bio_info">{{$player2->team}}</td>
	</tr>
	<tr>
		<td class="bio_title right">Age</td>
		<td class="bio_title">Age</td>
	</tr>
	<tr>
		<td class="bio_info right">{{$player1->age}}</td>
		<td class="bio_info">{{$player2->age}}</td>
	</tr>
	<tr>
		<td class="bio_title right">Division Rank</td>
		<td class="bio_title">Division Rank</td>
	</tr>
	<tr>
		<td class="bio_info right">{{$player1->rank}}</td>
		<td class="bio_info">{{$player2->rank}}</td>
	</tr>
	<tr>
		<td rowspan="5" colspan="2"><!--Keys to Victory--></td>
		<td class="center" rowspan="2"><img src="/l4/images/races/{{$player1->race}}.png" alt="Player 1 Race" /></td>
		<td class="center" rowspan="2"><img src="/l4/images/races/{{$player2->race}}.png" alt="Player 2 Race" /></td>
		<td rowspan="5" colspan="2"><!--Keys to Victory--></td>
	</tr>
	<tr>
		<td class="title center" colspan="2">Race</td>
	</tr>
	<tr>
		<td class="center"class="country_flag"><img src="images/countries/{{$player1->country}}.png" alt="Player 1 flag" /></td>
		<td class="title center" colspan="2">Country</td>
		<td class="center"class="country_flag"><img src="images/countries/{{$player2->country}}.png" alt="Player 2 flag" /></td>
	</tr>
	<tr>
		<td class="stat center">{{$player1->season_record}}</td>
		<td class="title center" colspan="2">Season Record</td>
		<td class="stat center">{{$player2->season_record}}</td>
	</tr>
	<tr>
		<td class="stat center">{{$player1->streak}}</td>
		<td class="title center" colspan="2">streak</td>
		<td class="stat center">{{$player2->streak}}</td>
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
