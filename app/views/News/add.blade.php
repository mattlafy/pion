@section('widgets')
@parent
<h1>Add News</h1>
{{Form::model($news)}}
<div>{{Form::label('topic', 'Topic')}} {{Form::text('topic')}}</div>
<div>{{Form::label('content', 'Content')}} {{Form::textarea('content',null,array('size'=>'20x10'))}}</div>
<div>{{Form::label('news_image', 'News Image')}} {{Form::file('news_image')}}</div>
<div>{{Form::submit('Post News')}}</div>

{{--<form action="addnews.php" method="post">
	<h6>Topic <input type="textarea" name="topic" value="{{$topic}}" /></h6>
	<h6>Content <textarea name="content">{{$content}}</textarea></h6>

	<h6>News Image <input type="file" name="news image"></h6>
	<p><input type="submit" value="Post News" name="submit"/></p>
	<input type="hidden" name="id" value="{{$id}" />
</form>--}}
@stop