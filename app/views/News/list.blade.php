<<<<<<< HEAD
@section('content')
<h1>STARLEAGUE NEWS</h1>
<h3>THE LATEST STARLEAGUE NEWS UPDATES</h3>

@foreach($news_posts as $temp)
<h4>{{$temp->title}}</h4>
<div>{{$temp->content}}</div>
<div> Written by {{$temp->author}} on {{$temp->date_posted}} </div>
@endforeach
=======
@section('content')
<h1>STARLEAGUE NEWS</h1>
<h3>THE LATEST STARLEAGUE NEWS UPDATES</h3>

@foreach($news_posts as $temp)
<h4>{{$temp->title}}</h4>
<div>{{$temp->content}}</div>
<div> Written by {{$temp->author}} on {{$temp->date_posted}} </div>
@endforeach


@yield('content')

@stop
>>>>>>> b82aa52030a67b6dd951eb829dd2896660da1661
