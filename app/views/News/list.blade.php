@section('news_tab') selected @stop
@section('content')
@parent
<h1>STARLEAGUE NEWS</h1>
<h3>THE LATEST STARLEAGUE NEWS UPDATES</h3>

@foreach($news_posts as $news)
<h2>{{$news->topic}}</h2>
<div>{{$news->content}}</div>
<div> Written by {{$news->postedBy()->first()->alias}} on {{date('l F jS Y', strtotime($news->created_at))}} </div>
@endforeach
@stop
