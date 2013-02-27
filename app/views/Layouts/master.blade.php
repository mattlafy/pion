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
			<div id="nav-news" class="selected"><a href="/l4/news">hit matt</a></div>
			<div class="seperator"></div>
			<div id="nav-rules"><a href="/l4/rules">RULES</a></div>
			<div class="seperator"></div>
			<div id="nav-players"><a href="/l4/player">PLAYERS</a></div>
			<div class="seperator"></div>
			<div id="nav-schedule"><a href="/l4/match">SCHEDULE</a></div>
			<div class="seperator"></div>
			<div id="nav-standings"><a href="/l4/standings">STANDINGS</a></div>
			<div class="seperator"></div>
			<nav class="nav-right">
				<div class="seperator"></div>
				<div id="nav-login">LOGIN</div>
				<div class="seperator"></div>
				<div id="nav-register"><a href="/l4/player/create">REGISTER</a></div>
				<div class="seperator"></div>
			</nav>
		</div>
		<div id='body-wrapper'>
			<div id="content">
				@yield('content')
			</div>
			<div id="widgets">widgets go here</div>
			<div class="clear"></div>
		</div>
	</div>
</body>
</html>
