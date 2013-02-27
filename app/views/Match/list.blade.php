@section('content')
<h1>Schedule</h1>

<table>
	<tr>
		<td colspan="7">Week 1</td>
		<td>Search<input type="text" name="search"/></td>
		
	</tr>
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
		<td><a href="{{$m->link}}">Preview Match</a></td>
		
	</tr>
	@endforeach
@stop