<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	{{HTML::style('foundation5/css/normalize.css')}}
	{{HTML::style('foundation5/css/foundation.css')}}
	{{HTML::script('foundation5/js/vendor/modernizr.js')}}
</head>
<body>
	<div class="row">
		<div class="large-5 columns">
			<h4> Transit Tracking and Routing System </h4>
		</div>
		<div class="large-7 columns">
			<ul class="right button-group">
				<li><a href="/home" class="button small">Home</a></li>
				<li><a href="/demo" class="button small">Demo</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div id="slider">
				<img src="/banner-satalite.jpeg"/>
			</div>
			<hr/>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<h4>What is TTRS?</h4>
			<p>The Transit Tracking and Routing System (TTRS), is a navigation system that uses  The Global Positioning 
			System (GPS), to get real time information on Jamaica's private and public transportation systems. TTRS allow 
			user to get real time and up-to-date information on vehicle routes,  estimated arrival time of next vehicle, estimated travel time, traffic information, and real time vehicle location and tracking information.</p>
			<p> TTRS was built to provide these services for the regular commuter in the urban areas such as
			Kingston, Portmore, Spanish Town, Montego Bay and connecting towns.</p>
			<p>The system relies our partnership with participating transportation companies and entities, to authorize the use of their tracking information. As a part of our partnership with participating companies and private entities we will provide both physical hardware for gathering tracking information and complementary software to make use of the data gathered.</p> 
		</div>
		<div class="columns">
			<h4>About Project</h4>
			<p>The project is currently under development. To get more information follow on twitter or view the live demo.</p>
		</div>
	</div>
	
	<footer class="row">
		<div class="large-12 columns">
			<hr/>
			<div class="row">
				<div class="large-6 columns">
					<p>© Copyright</p>
				</div>
			</div>
		</div>
	</footer>
	{{HTML::script('foundation5/js/vendor/jquery.js')}}
    {{HTML::script('foundation5/js/foundation.min.js')}}
</body>
</html>