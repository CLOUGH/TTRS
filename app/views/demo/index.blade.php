<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	{{HTML::style('foundation5/css/normalize.css')}}
	{{HTML::style('foundation5/css/foundation.css')}}
	{{HTML::script('foundation5/js/vendor/modernizr.js')}}

	<style type="text/css">
		html, body, #map-canvas { 
			height: 500px; 
			margin: 0; 
			padding: 0;
		}
	</style>
	<script type="text/javascript"
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbZg-68edAsvEXpIfb_2iPGKORUVx3Szs"></script>
	<script type="text/javascript">
		function initialize() {
		  var mapOptions = {
		    center: { lat: 18.1824, lng: -77.3218},
		    zoom: 9
		  };
		  var map = new google.maps.Map(document.getElementById('map-canvas'),
		      mapOptions);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	
</head>
<body>
	<div class="row">
		<div class="large-12 columns">
			<div class="nav-bar right">
				<ul class="button-group">
					<li><a href="/home" class="small button">Home</a></li>
					<li><a href="/demo" class="small button">Demo</a></li>
				</ul>
			</div>
			<h4>Live Demo</h4>
			<hr/>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns" role="content">
			<div id="map-canvas"></div>
		</div> 
	</div>
	<footer class="row">
		<div class="large-12 columns">
			<hr/>
			<div class="row">
				<div class="large-6 columns">
					<p>© Copyright.</p>
				</div>				
			</div>
		</div>
	</footer>
	{{HTML::script('foundation5/js/vendor/jquery.js')}}
    {{HTML::script('foundation5/js/foundation.min.js')}}
    
</body>
</html>