<<<<<<< HEAD
<<<<<<< HEAD
@section('content')
<h1>STARLEAGUE NEWS</h1>
<h3>THE LATEST STARLEAGUE NEWS UPDATES</h3>

@foreach($news_posts as $temp)
<h4>{{$temp->title}}</h4>
<div>{{$temp->content}}</div>
<div> Written by {{$temp->author}} on {{$temp->date_posted}} </div>
@endforeach


@parent



=======
@section('content')
<h1>STARLEAGUE NEWS</h1>
<h3>THE LATEST STARLEAGUE NEWS UPDATES</h3>

@foreach($news_posts as $temp)
<h4>{{$temp->title}}</h4>
<div>{{$temp->content}}</div>
<div> Written by {{$temp->author}} on {{$temp->date_posted}} </div>
@endforeach

>>>>>>> fa79e98d7cdc3253f9763243419b78d25b53f3f7
=======
@section('content')
<h1>STARLEAGUE NEWS</h1>
<h3>THE LATEST STARLEAGUE NEWS UPDATES</h3>

@foreach($news_posts as $temp)
<h4>{{$temp->title}}</h4>
<div>{{$temp->content}}</div>
<div> Written by {{$temp->author}} on {{$temp->date_posted}} </div>
@endforeach

@stop

@section('test')
<h2>test NEWS</h2>
>>>>>>> 5377f6f77f320084ba86dac1c09c94660419bf9d
@stop