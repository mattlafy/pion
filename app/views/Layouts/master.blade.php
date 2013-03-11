<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/l4/style.css" />
</head>
<body>
	<div id="pion-nav">
		<div id="pion-nav-centre">
			<img id="pion-nav-logo" src="/l4/images/pion-small.png" />
			<div id="pion-nav-leagues">
				<img id="starleage-small-logo" src="/l4/images/starleague-small-logo.png" />
				<img id="starleage-small-logo2" src="/l4/images/starleague-small-logo.png" />
				<img id="starleage-small-logo3" src="/l4/images/starleague-small-logo.png" />
			</div>
		</div>
	</div>
	<div id="site-body">
		<div id="header">
			<a href="/l4/"><img id="site-logo" alt="Logo" src="/l4/images/starleaguelogo.png" /></a>
		</div>
		<div id="nav">
			<div class="seperator"></div>
			<div id="nav-news" class="@yield('news_tab')"><a href="/l4/news">NEWS</a></div>
			<div class="seperator"></div>
			<div id="nav-rules" class="@yield('rules_tab')"><a href="/l4/rules">RULES</a></div>
			<div class="seperator"></div>
			<div id="nav-players" class="@yield('players_tab')"><a href="/l4/player">PLAYERS</a></div>
			<div class="seperator"></div>
			<div id="nav-schedule" class="@yield('schedule_tab')"><a href="/l4/match">SCHEDULE</a></div>
			<div class="seperator"></div>
			<div id="nav-standings" class="@yield('standings_tab')"><a href="/l4/standings">STANDINGS</a></div>
			<div class="seperator"></div>
			<nav class="nav-right">
				<div class="seperator"></div>
@if(Auth::check())
        <div id="nav-user" class="">Hello {{Auth::user()->alias}}</div>
@else
        <div id="nav-login" class="@yield('login_tab')"><a href="/l4/login">LOGIN</a></div>
				<div class="seperator"></div>
				<div id="nav-register" class="@yield('register_tab')"><a href="/l4/player/create">REGISTER</a></div>
@endif
				<div class="seperator"></div>
			</nav>
		</div>
		<div id='body-wrapper'>
			<div id="content-area">
				@section('content')
        @show
			</div>
			<div id="widgets">
				@section('widgets')
        @show
      </div>
			<div class="clear"></div>
		</div>
	</div>
</body>
</html>
