@section('players_tab') selected 
@stop
@section('content')
@foreach($players as $p)
<table id="player_bio">
    <tr>
        <td rowspan="5">
            picture
        </td>
        <td colspan="2">
            Alias
        </td>
        <td rowspan="2">
            <img src="/l4/images/races/{{$player->race}}.png" alt="Player Race" />
        </td>
    </tr>
    <tr>
        <td>name</td>
        <td>nick</td>
       
    </tr>
    <tr>
        <td>age</td>
        <td>26</td>
        <td rowspan="3">league placeholder</td>
        
    </tr>
    <tr>
        <td>country</td>
        <td>canada</td>
    </tr>
    <tr>
        <td>team</td>
        <td>whateverteam</td>
    </tr>
</table>
@endforeach
@stop
