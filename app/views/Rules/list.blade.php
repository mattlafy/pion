@section('content')
<h1>STARLEAGUE RULES</h1>
<h3>A COMPREHENSIVE LIST OF THE RULES OF STARLEAGUE</h3>
@foreach($rules as $rule)
<div class="indent-{{$rule->dots}}">
  <h4>{{$rule->rule}}</h4>
  <h4>{{$rule->title}}</h4>
  <div>{{$rule->text}}</div>
</div>
@endforeach








@stop