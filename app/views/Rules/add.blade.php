@section('content')
<h1>Add Rules</h1>
<form method="get">
	<h6>Rule Number<input type="text" name="rule_number" /></h6>
	<h6>Title<input type="textarea" name="title" /></h6>
	<h6>Content <textarea name="content"></textarea></h6>
	<p><input type="submit" value="Post Rules" name="submit"/></p>
	</form>
@stop