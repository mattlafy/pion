@section('rules_tab') selected @stop
@section('content')
<h1>STARLEAGUE RULES</h1>
<h3>A COMPREHENSIVE LIST OF THE RULES OF STARLEAGUE</h3>
@foreach($rules as $rule)
<div class="indent-{{$rule->dots()}}>
  <h4>{{$rule->number}}</h4>
  <h4>{{$rule->name}}</h4>
  <div>{{$rule->rule}}</div>
</div>
@endforeach








@stop