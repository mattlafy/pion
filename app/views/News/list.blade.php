@section('news_tab') selected @stop
@section('content')
@parent
<h1>STARLEAGUE NEWS</h1>
<h3>THE LATEST STARLEAGUE NEWS UPDATES</h3>

@foreach($news_posts as $news)
<h4>{{$news->topic}}</h4>
<div>{{$news->content}}</div>
<div> Written by {{$news->author}} on {{$news->created_at}} </div>
{{$news}}
{{var_dump($news->postedBy()->alias)}}
@endforeach
@stop
