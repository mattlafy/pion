@section('players_tab') selected @stop
@section('content')
<h1>Players</h1>
<h3>Search <input type="text" name="search"/></h3>
<table class="data">
	<tr>
		<td>Alias</td>
		<td>Name</td>
		<td>Race</td>
		<td>Team</td>
		<td>Country</td>
		<td>Rank</td>
		
		
	</tr>
	@foreach($players as $p)
	<tr>
		<td><a href="/l4/player/{{$p->alias}}">{{$p->alias}}</a></td>
		<td>{{$p->name}}</td>
		<td>{{$p->race}}</td>
		<td>{{$p->team}}</td>
		<td>{{$p->country}}</td>
		<td>{{$p->rank}}</td>
	</tr>
	@endforeach
</table>
@stop