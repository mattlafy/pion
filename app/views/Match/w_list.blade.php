@section('widgets')
@parent
my upcoming matches
<table class='data'>
  <tr>
     <td>week</td>
     <td>Opponent</td>
     <td>maps</td>
     <td>date</td>
  </tr>
  <tr>
     <td rowspan="3">week1</td>
     <td rowspan="3">randomguy</td>
     <td>map1</td>
     <td rowspan="3">march 13</td>
  </tr>
  <tr>
     <td>map2</td>
  </tr>
  <tr>
     <td>map3</td>
  </tr>
</table>
@stop