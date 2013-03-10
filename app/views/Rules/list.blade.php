@section('rules_tab') selected @stop
@section('content')
<h1>STARLEAGUE RULES</h1>
<h3>A COMPREHENSIVE LIST OF THE RULES OF STARLEAGUE</h3>
@foreach($rules as $rule)
<div class="indent-{{$rule->dots()}}">
  <h3>{{$rule->number}}</h3>
  <h2>{{$rule->name}}</h2>
  <div>{{$rule->rule}}</div>
</div>
@endforeach








@stop