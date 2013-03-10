@section('players_tab') selected @stop
@section('content')
<h1>Players</h1>
<H3>Current Season Players List</H3>
<h3 id="player_search">Search<input type="text" name="search"/></h3>

<table class="data" id="players_list">
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
		<td>{{$p->first_name}}{{$p->last_name}}</td>
		<td>{{$p->race}}</td>
		<td>{{$p->team->name}}</td>
		<td>{{$p->country->name}}</td>
		<td>{{$p->rank}}</td>
	</tr>
	@endforeach
</table>
@stop