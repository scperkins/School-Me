<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=<?=MAPS_API_KEY?>&sensor=true">
</script>
<style type="text/css">
	html { height: 100% }
	body { height: 100%; margin: 0; padding: 0 }
	#map-canvas { height: 800px }
</style>
<div id="map-canvas"/>

<script type="text/javascript" src="/js/counties.js"></script>
<script type="text/javascript">

	var map;
	var infoWindow;

	function initialize() {
		var mapOptions = {
			center: new google.maps.LatLng(43.904448, -72.355957),
			zoom: 8,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

		// 	The following code generate a
		// 	GPolygon object
		// 	Named as dynRegionPolygon
		var points = [
			new google.maps.LatLng(45.00942, -73.35300),
			new google.maps.LatLng(44.94526, -73.33445),
			new google.maps.LatLng(44.78159, -73.33556),
			new google.maps.LatLng(44.70249, -73.35777),
			new google.maps.LatLng(44.64492, -73.37791),
			new google.maps.LatLng(44.57624, -73.36805),
			new google.maps.LatLng(44.49777, -73.30834),
			new google.maps.LatLng(44.44944, -73.29167),
			new google.maps.LatLng(44.24801, -73.32073),
			new google.maps.LatLng(44.20625, -73.37778),
			new google.maps.LatLng(44.07972, -73.42362),
			new google.maps.LatLng(43.97860, -73.41195),
			new google.maps.LatLng(43.87958, -73.37861),
			new google.maps.LatLng(43.78833, -73.36194),
			new google.maps.LatLng(43.74431, -73.36633),
			new google.maps.LatLng(43.63986, -73.42527),
			new google.maps.LatLng(43.59069, -73.42528),
			new google.maps.LatLng(43.59090, -73.37160),
			new google.maps.LatLng(43.62930, -73.32890),
			new google.maps.LatLng(43.54381, -73.24347),
			new google.maps.LatLng(43.46249, -73.24111),
			new google.maps.LatLng(42.92276, -73.26363),
			new google.maps.LatLng(42.84701, -73.26854),
			new google.maps.LatLng(42.75111, -73.25335),
			new google.maps.LatLng(42.72910, -72.46654),
			new google.maps.LatLng(42.78777, -72.51723),
			new google.maps.LatLng(42.82736, -72.54819),
			new google.maps.LatLng(42.87861, -72.55541),
			new google.maps.LatLng(42.96860, -72.52118),
			new google.maps.LatLng(43.00333, -72.46764),
			new google.maps.LatLng(43.14457, -72.45618),
			new google.maps.LatLng(43.25111, -72.43666),
			new google.maps.LatLng(43.30228, -72.40271),
			new google.maps.LatLng(43.44638, -72.39445),
			new google.maps.LatLng(43.57306, -72.38276),
			new google.maps.LatLng(43.69610, -72.31666),
			new google.maps.LatLng(43.73249, -72.28264),
			new google.maps.LatLng(43.77541, -72.21403),
			new google.maps.LatLng(43.82054, -72.19333),
			new google.maps.LatLng(43.88874, -72.17611),
			new google.maps.LatLng(43.98221, -72.10445),
			new google.maps.LatLng(44.10114, -72.04847),
			new google.maps.LatLng(44.28214, -72.04416),
			new google.maps.LatLng(44.32271, -72.01265),
			new google.maps.LatLng(44.34062, -71.96847),
			new google.maps.LatLng(44.34610, -71.92027),
			new google.maps.LatLng(44.38138, -71.81639),
			new google.maps.LatLng(44.43860, -71.68250),
			new google.maps.LatLng(44.51791, -71.59015),
			new google.maps.LatLng(44.58492, -71.55111),
			new google.maps.LatLng(44.64416, -71.57709),
			new google.maps.LatLng(44.75714, -71.63437),
			new google.maps.LatLng(44.81763, -71.57625),
			new google.maps.LatLng(44.92819, -71.50848),
			new google.maps.LatLng(44.98047, -71.53840),
			new google.maps.LatLng(45.02055, -71.49416),
			new google.maps.LatLng(45.01721, -72.51028),
			new google.maps.LatLng(45.02083, -72.77888),
			new google.maps.LatLng(45.00942, -73.35300)
		];
		var vermontPolygon = new google.maps.Polygon({
			path: points,
			strokeColor: '#f33f00',
			strokeOpacity: 1,
			strokeWeight: 1,
			fillOpacity: 0.1
		});

		var addisonPolygon = new google.maps.Polygon({
			path: addisonPoints,
			strokeColor: '#f33f00',
			strokeOpacity: 1,
			strokeWeight: 1,
			fillOpacity: 0.1
		});

		var benningtonPolygon = new google.maps.Polygon({
			path: benningtonPoints,
			strokeColor: '#f33f00',
			strokeOpacity: 1,
			strokeWeight: 1,
			fillOpacity: 0.1
		});

		var caledoniaPolygon = new google.maps.Polygon({
			path: caledoniaPoints,
			strokeColor: '#f33f00',
			strokeOpacity: 1,
			strokeWeight: 1,
			fillOpacity: 0.1
		});

		var chittidenPolygon = new google.maps.Polygon({
			path: chittidenPoints,
			strokeColor: '#f33f00',
			strokeOpacity: 1,
			strokeWeight: 1,
			fillOpacity: 0.1
		});

		var essexPolygon = new google.maps.Polygon({
			path: essexPoints,
			strokeColor: '#f33f00',
			strokeOpacity: 1,
			strokeWeight: 1,
			fillOpacity: 0.1
		});

		var franklinPolygon = new google.maps.Polygon({
			path: franklinPoints,
			strokeColor: '#f33f00',
			strokeOpacity: 1,
			strokeWeight: 1,
			fillOpacity: 0.1
		});

		var grandIslePolygon = new google.maps.Polygon({
			path: grandIslePoints,
			strokeColor: '#f33f00',
			strokeOpacity: 1,
			strokeWeight: 1,
			fillOpacity: 0.1
		});

		var lamoillePolygon = new google.maps.Polygon({
			path: lamoillePoints,
			strokeColor: '#f33f00',
			strokeOpacity: 1,
			strokeWeight: 1,
			fillOpacity: 0.1
		});

		var orangePolygon = new google.maps.Polygon({
			path: orangePoints,
			strokeColor: '#f33f00',
			strokeOpacity: 1,
			strokeWeight: 1,
			fillOpacity: 0.1
		});

		var orleansPolygon = new google.maps.Polygon({
			path: orleansPoints,
			strokeColor: '#f33f00',
			strokeOpacity: 1,
			strokeWeight: 1,
			fillOpacity: 0.1
		});

		var rutlandPolygon = new google.maps.Polygon({
			path: rutlandPoints,
			strokeColor: '#f33f00',
			strokeOpacity: 1,
			strokeWeight: 1,
			fillOpacity: 0.1
		});

		var washingtonPolygon = new google.maps.Polygon({
			path: washingtonPoints,
			strokeColor: '#f33f00',
			strokeOpacity: 1,
			strokeWeight: 1,
			fillOpacity: 0.1
		});

		var windhamPolygon = new google.maps.Polygon({
			path: windhamPoints,
			strokeColor: '#f33f00',
			strokeOpacity: 1,
			strokeWeight: 1,
			fillOpacity: 0.1
		});

		var windsorPolygon = new google.maps.Polygon({
			path: windsorPoints,
			strokeColor: '#f33f00',
			strokeOpacity: 1,
			strokeWeight: 1,
			fillOpacity: 0.1
		});

		vermontPolygon.setMap(map);
		addisonPolygon.setMap(map);
		google.maps.event.addListener(addisonPolygon, 'mousemove', solidOpacity);
		google.maps.event.addListener(addisonPolygon, 'mouseout', removeOpacity);
		benningtonPolygon.setMap(map);
		caledoniaPolygon.setMap(map);
		chittidenPolygon.setMap(map);
		essexPolygon.setMap(map);
		franklinPolygon.setMap(map);
		grandIslePolygon.setMap(map);
		lamoillePolygon.setMap(map);
		orangePolygon.setMap(map);
		orleansPolygon.setMap(map);
		rutlandPolygon.setMap(map);
		washingtonPolygon.setMap(map);
		windhamPolygon.setMap(map);
		windsorPolygon.setMap(map);
		//infoWindow = new google.maps.InfoWindow();

		function solidOpacity(event)
		{
			this.setOptions({fillOpacity: 1});
		}

		function removeOpacity(event)
		{
			this.setOptions({fillOpacity: 0.1});
		}
	}
	google.maps.event.addDomListener(window, 'load', initialize);


</script>