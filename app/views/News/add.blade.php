@include('Layouts.data')
@section('widgets')
@parent
<h1>Add News{{$root}}</h1>
<form action="addnews.php" method="post">
	<h6>Topic <input type="textarea" name="topic" value="{{$topic}}" /></h6>
	<h6>Content <textarea name="content">{{$content}}</textarea></h6>

	<h6>News Image <input type="file" name="news image"></h6>
	<p><input type="submit" value="Post News" name="submit"/></p>
	<input type="hidden" name="id" value="{{$id}" />
</form>
@stop