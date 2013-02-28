<<<<<<< HEAD
@section('content')
@parent
<h1>STARLEAGUE NEWS</h1>
<h3>THE LATEST STARLEAGUE NEWS UPDATES</h3>

@foreach($news_posts as $temp)
<h4>{{$temp->title}}</h4>
<div>{{$temp->content}}</div>
<div> Written by {{$temp->author}} on {{$temp->date_posted}} </div>
@endforeach
@yield_section
=======
@section('content')
@parent
<h1>STARLEAGUE NEWS</h1>
<h3>THE LATEST STARLEAGUE NEWS UPDATES</h3>

@foreach($news_posts as $temp)
<h4>{{$temp->title}}</h4>
<div>{{$temp->content}}</div>
<div> Written by {{$temp->author}} on {{$temp->date_posted}} </div>
@endforeach
@stop
>>>>>>> fecae369e1ff4fe047b4b9eba80338f12cd37949
