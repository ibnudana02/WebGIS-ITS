<!DOCTYPE html>
<html>
<head>
	<style>
		html, body, #mapid{
			height: 100%;
			margin: 0px;
			padding: 0px;
		}
			.leaflet-control-attribution {display:none!important}
	</style>

	<title>Integrated Transportation System Bus DAMRI</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ;?>docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

</head>
<body>
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
	
<div id="mapid"></div>
<script src="<?php echo base_url() ;?>js/projs.js"></script>
<script src="<?php echo base_url() ;?>map/db"></script>
<script>
	var config = {
		apiKey: "AIzaSyD6HMcCufi3jBdsUprRhs0NTcW6_YzuyFw",
		authDomain: "skripsi-194003.firebaseapp.com",
		databaseURL: "https://skripsi-194003.firebaseio.com",
		storageBucket: "skripsi-194003.appspot.com",
	};
	firebase.initializeApp(config);
	database = firebase.database();

	var ref = database.ref('Locations');
	// ref.on('value', gotData, err);
	ref.on('value', function(data){
		loc = data.val();
		var keys = Object.keys(loc);
		console.log(keys);
		for (var i = 0; i < keys.length; i++) {
			var k = keys[i];
			var lt = loc[k].lat;
			var lg = loc[k].lng;
			console.log(lt,lg);
		}
	}, function(errorObject){
		console.log("The read failed: " + errorObject.code);
	});

	var mymap  = L.map('mapid').setView([0.404431, 101.23764], 11);
	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);

	L.geoJSON(trayek,{
		style: function (feature) {
		    return {
		    	color: "green",
			    opacity: 1,
			    clickable: true
				 	};
		},
            onEachFeature: function (feature, layer) {
            layer.bindPopup('<table class="table table-striped table-bordered table-condensed">' +
				'<tr><th>Nama Trayek</th><td>' + feature.properties.nama + '</td></tr>' +
				'<tr><th>Direction</th><td>' + feature.properties.direction + '</td></tr>' +
				'<tr><th>Tipe</th><td>' + feature.properties.type + '</td></tr>' + '<table>');
        	}
    }).addTo(mymap);
</script>
<script type="text/javascript" src="<?php echo base_url();?>a/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/firebase.js"</script>
</body>
</html>