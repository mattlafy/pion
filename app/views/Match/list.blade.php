@section('schedule_tab') selected @stop
@section('content')
<h1>Schedule</h1>

Week 1<br>
Search<input type="text" name="search"/>
<table class="data">
  <tr>
		<td>Home Player</td>
    <td>vs</td>
		<td>Away Player</td>
		<td>Deadline</td>
		<td>Map 1</td>
		<td>Map 2</td>
		<td>Map 3</td>
		<td>Preview Match</td>
	</tr>
	@foreach($matches as $m)
	<tr>
		<td>{{$m->homePlayer()->first()->alias}}</td>
		<td></td>
		<td>{{$m->awayPlayer()->first()->alias}}</td>
		<td>{{$m->week()->first()->deadline}}</td>
		<td>{{$m->week()->first()->map_one}}</td>
		<td>{{$m->week()->first()->map_two}}</td>
		<td>{{$m->week()->first()->map_three}}</td>
		<td><a href="/l4/match/{{$m->id}}">Preview Match</a></td>
  </tr>
  @endforeach
</table>
@stop