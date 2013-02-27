@section('content')
<h1>STARLEAGUE STANDINGS</h1>
<H3>Current Season, Season One 2013</H3>
<table class="data">
	<tr>
		<td>#</td>
		<td>Player</td>
		<td>Race</td>
		<td>Team</td>
		<td>MP</td>
		<td>W</td>
		<td>L</td>
		<td>S</td>
		<td>L5</td>
		<td>GW</td>
		<td>GL</td>
		<td>+/-</td>
	</tr>
	@foreach($players as $p)
	<tr>
		<td>{{$p->rank}}</td>
		<td>{{$p->alias}}</td>
		<td>{{$p->race}}</td>
		<td>{{$p->team}}</td>
		<td>{{$p->matches_played}}</td>
		<td>{{$p->wins}}</td>
		<td>{{$p->losses}}</td>
		<td>{{$p->streak}}</td>
		<td>{{$p->last_five_games}}</td>
		<td>{{$p->games_won}}</td>
		<td>{{$p->games_lost}}</td>
		<td>{{$p->plus_minus}}</td>
	</tr>
	@endforeach
</table>
<table class="data">
    <tr>
        <td></td>
        <td>Definition</td>
        
    </tr>
    <tr>
        <td>MP</td>
        <td>Matches Played</td>
    </tr>
    <tr>
        <td>W</td>
        <td>Wins(Matches)</td>
    </tr>
    <tr>
        <td>L</td>
        <td>Losses(Matches)</td>
    </tr> 
    <tr>
        <td>S</td>
        <td>Streak</td>
    </tr>
    <tr>
        <td>L5</td>
        <td>Last 5 Games</td>
    </tr>
    <tr>
        <td>GW</td>
        <td>Games Won</td>
    </tr>
    <tr>
        <td>GL</td>
        <td>Games Lost</td>
    </tr>
    <tr>
        <td>+/-</td>
        <td>Plus/Minus GW/GL</td>
    </tr>
    
    

</table>
@stop