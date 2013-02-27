<<<<<<< HEAD
@section('content')
<h1>STARLEAGUE NEWS</h1>
<h3>THE LATEST STARLEAGUE NEWS UPDATES</h3>

@foreach($news as $n)
<h4>EXAMPLE NEWS TITLE</h4>
<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus egestas, est eget commodo dapibus, augue urna pretium purus,
et consequat leo nulla in mauris. Suspendisse eleifend elementum nunc nec tincidunt. In cursus, massa et fringilla egestas, nisi 
purus sodales enim, elementum iaculis quam nibh et massa. Vivamus ac odio sem. Morbi sed ligula ultricies nunc tempor ultricies. 
Suspendisse lectus felis, aliquet eu semper nec, ultrices eu elit. Nam molestie venenatis nisi. Aliquam ut ante erat. Sed et mi quam, 
non interdum velit. Maecenas mi neque, ultricies vitae vehicula ut, imperdiet vel mauris. Etiam id congue dolor. Nulla semper metus 
at risus auctor eu condimentum quam pellentesque. Curabitur eget velit lorem, porttitor faucibus metus. In placerat venenatis 
fringilla. Vivamus sollicitudin eros in augue eleifend rutrum ut ut orci.</div>
<div> written by somebody on somedate </div>
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





>>>>>>> 77bfe8333dbedeb44f63ba830fbf986f5cbcbb74
@stop