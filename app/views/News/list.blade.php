@section('news_tab') selected @stop
@section('content')
@parent
<h1>STARLEAGUE NEWS</h1>
<h3>THE LATEST STARLEAGUE NEWS UPDATES</h3>

@foreach($news_posts as $news)
<h4>{{$news->topic}}</h4>
<div>{{$news->content}}</div>
<div> Written by {{$news->author}} on {{date('l F jS Y', strtotime$news->created_at)}} </div>
{{$news}}
{{$news->postedBy()->first()}}
@endforeach
@stop
