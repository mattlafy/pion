@section('widgets')
@parent
<h1>Add News</h1>
{{FormBuilder::model($news)}}
{{FormBuilder::label('topic', 'Topic')}}
{{FormBuilder::text('topic')}}
{{FormBuilder::label('content', 'Content')}}
{{FormBuilder::textarea('content')}}
{{FormBuilder::label('news_image', 'News Image')}}
{{FormBuilder::file('news_image')}}
{{FormBuilder::submit('Post News')}}
{{--<form action="addnews.php" method="post">
	<h6>Topic <input type="textarea" name="topic" value="{{$topic}}" /></h6>
	<h6>Content <textarea name="content">{{$content}}</textarea></h6>

	<h6>News Image <input type="file" name="news image"></h6>
	<p><input type="submit" value="Post News" name="submit"/></p>
	<input type="hidden" name="id" value="{{$id}" />
</form>--}}
@stop