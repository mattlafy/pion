@section('content')
@parent
<h1>Add News</h1>
{{Form::model($news, array('action'=>'NewsController@store','files'=>true))}}
<div>{{Form::label('topic', 'Topic')}} {{Form::text('topic')}}</div>
<div>{{Form::label('content', 'Content')}} {{Form::textarea('content',null,array('size'=>'20x10'))}}</div>
<div>{{Form::label('news_image', 'News Image')}} {{Form::file('news_image')}}</div>
<div>{{Form::submit('Post News')}}</div>
{{Form::hidden('id')}}
{{Form::token()}}
{{Form::close()}}
{{hash_algos()}}
@stop