@section('content')
<h1>Login</h1>
{{Form::open(array('action'=>'AuthController@check'))}}
<div>{{Form::label('email', 'Email')}} {{Form::text('email')}}</div>
<div>{{Form::label('password', 'Password')}} {{Form::text('password')}}</div>
<div>{{Form::submit('Login')}}</div>
{{Form::token()}}
{{Form::close()}}

{{Hash::make('test')}}
@stop