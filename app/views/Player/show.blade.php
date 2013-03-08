@section('players_tab') selected 
@stop
@section('content')
@foreach($players as $p)
<table id="player_bio">
    <tr>
        <td rowspan="5">
            picture
        </td>
        <td class="profile_alias" colspan="2">
            Alias
        </td>
        <td rowspan="2">
            <img src="/l4/images/races/{{$player->race}}.png" alt="Player Race" />
        </td>
    </tr>
    <tr>
        <td class="profile_title">name</td>
        <td class="profile_info">nick</td>
       
    </tr>
    <tr>
        <td class="profile_title">age</td>
        <td class="profile_info">26</td>
        <td rowspan="3">league placeholder</td>
        
    </tr>
    <tr>
        <td class="profile_title">country</td>
        <td class="profile_info">canada</td>
    </tr>
    <tr>
        <td class="profile_title">team</td>
        <td class="profile_info">whateverteam</td>
    </tr>
</table>
@endforeach
@stop
