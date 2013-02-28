@section('content')
<h1>Schedule</h1>

Week 1<br>
Search<input type="text" name="search"/>
<table class="data">
  <tr>
		<td>Home Team</td>
		<td>vs</td>
		<td>Away Team</td>
		<td>Date</td>
		<td>Map 1</td>
		<td>Map 2</td>
		<td>Map 3</td>
		<td>Preview Match</td>
	</tr>
	@foreach($matches as $m)
	<tr>
		<td>{{$m->home_team}}</td>
		<td></td>
		<td>{{$m->away_team}}</td>
		<td>{{$m->date}}</td>
		<td>{{$m->map_1}}</td>
		<td>{{$m->map_2}}</td>
		<td>{{$m->map_3}}</td>
		<td><a href="/l4/match/{{$m->id}}">Preview Match</a></td>
  </tr>
  @endforeach
</table>

@stop