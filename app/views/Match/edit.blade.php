@section('content')
<h1>Report Match</h1>

<table>
  <tr>
    <td>{{playername}}</td>
    <td>versus</td>
    <td>{{opponentname}}</td>
  </tr>
  <tr>
    <td colspan="3">Game 1</td>
  </tr>
  <tr>
    <td><input type="radio" name="game1winner" value="{{playerid}}"></td>
    <td>Winner</td>
    <td><input type="radio" name="game1winner" value="{{opponentid}}"></td>
  </tr>
  <tr>
    <td colspan="3">Demo File <input type="file" name="game1demo"></td>
  </tr>
  <tr>
    <td colspan="3">Game 2</td>
  </tr>
  <tr>
    <td><input type="radio" name="game1winner" value="{{playerid}}"></td>
    <td>Winner</td>
    <td><input type="radio" name="game1winner" value="{{opponentid}}"></td>
  </tr>
  <tr>
    <td colspan="3">Demo File <input type="file" name="game1replay"></td>
  </tr>  <tr>
    <td colspan="3">Game 3</td>
  </tr>
  <tr>
    <td><input type="radio" name="game1winner" value="{{playerid}}"></td>
    <td>Winner</td>
    <td><input type="radio" name="game1winner" value="{{opponentid}}"></td>
  </tr>
  <tr>
    <td colspan="3">Demo File <input type="file" name="game1replay></td>
  </tr>
	

</table>

	
<p><input type="submit" value="Report Match" name="Report Match"/></p>
@stop