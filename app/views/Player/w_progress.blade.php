@section('widgets')
@parent
<table id="progress_widget">
  
 <tr>
   <td class="progress_header" colspan='2'><div class='progress_header_one'>Welcome to Pion Esports StarLeague</div><div class='progress_header_two'>Follow these steps to begin competing today!</div></td>
 </tr>
  <tr>
   <td></td>
 </tr>
 <tr class="{{$progress->register}}">
   <td><input type="checkbox" disabled {{$progress->register}}/></td>
   <td><div class="progress_title"><a href='/l4/register'>Register</a></div><div class='progress_instruction'>Or sign in to an existing account by clicking Login above</div></td>
 </tr>
 <tr>
   <td colspan="2"></td>
 </tr>
 <tr class="{{$progress->season}}">
   <td><input type="checkbox" disabled {{$progress->season}}/></td>
   <td><div class="progress_title"><a href='/l4/joinleague'>Join Season</a></div><div class='progress_instruction'>Sign up today to play in the current season. Compete against the best players- Earn fantastic prizes!</div></td>
 </tr>
 <tr>
   <td colspan="2"></td>
 </tr>
 <tr class="{{$progress->premium}}">
   <td><input type="checkbox" disabled {{$progress->premium}}/></td>
   <td><div class="progress_title"><a href='/l4/subscribe'>Subscribe to Premium</a></div><div class='progress_instruction'>Subscribe to our premium cash pool. Become eligible to compete for cash prizes!</div></td>
 </tr>
 <tr>
   <td colspan="2"></td>
 </tr>
 <tr class="{{$progress->create_team}}">
   <td><input type="checkbox" disabled {{$progress->create_team}}/></td>
   <td><div class="progress_title"><a href='/l4/create_team'>Create a Team</a></div><div class='progress_instruction'>Setup a new team in our league</div></td>
 </tr>
 <tr>
   <td colspan="2"></td>
 </tr>
 <tr class="{{$progress->join_team}}">
   <td><input type="checkbox" disabled {{$progress->join_team}}/></td>
   <td><div class="progress_title"><a href='/l4/join_team'>Join a Team</a></div><div class='progress_instruction'>Join an existing team in our league. You'll need your team's password to gain access.</div></td>
 </tr>
 <tr>
   <td colspan="2"></td>
 </tr>
</table>
@stop