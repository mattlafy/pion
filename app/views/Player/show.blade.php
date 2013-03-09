@section('players_tab') selected 
@stop
@section('content')

<table id="player_bio">
    <tr>
        <td rowspan="5">
            picture
        </td>
        <td class="profile_alias" colspan="2">
            {{$player->alias}}
        </td>
        <td rowspan="2">
            <img src="/l4/images/races/{{$player->race}}.png" alt="Player Race" />
        </td>
    </tr>
    <tr>
        <td class="profile_title">Name</td>
        <td class="profile_info">{{$player->first_name}}{{$player->last_name}}</td>
       
    </tr>
    <tr>
        <td class="profile_title">Age</td>
        <td class="profile_info">{{$player->age</td>
        <td rowspan="3">league placeholder</td>
        
    </tr>
    <tr>
        <td class="profile_title">Country</td>
        <td class="profile_info">{{$player->country()->first()->name</td>
    </tr>
    <tr>
        <td class="profile_title">Team</td>
        <td class="profile_info">{{$player->team()->first()->name</td>
    </tr>
</table>

@stop
