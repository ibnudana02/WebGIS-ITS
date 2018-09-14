<div id="mapid"></div>
<script src="<?php echo base_url() ;?>js/projs.js"></script>
<script src="<?php echo base_url() ;?>user/shelter/db"></script>
<script>
	
	var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
	});

	var mymap  = L.map('mapid').setView([0.404431, 101.23764], 11);
	L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
	}).addTo(mymap);

	L.geoJSON(shelter,{
		style: function (feature) {
		    return {
		    	color: "blue",
			    opacity: 1,
			    clickable: true
				 	};
		},
            onEachFeature: function (feature, layer) {
            layer.bindPopup('<table class="table table-striped table-bordered table-condensed">' +
				'<tr><th>Nama Shelter</th><td>' + feature.properties.nama + '</td></tr>' +
				'<tr><th>Kota</th><td>' + feature.properties.kota + '</td></tr>' +
				'<tr><th>Latitude</th><td>' + feature.properties.lat + '</td></tr>' +
            	'<tr><th>Longitude</th><td>' + feature.properties.long + '</td></tr>' + '<table>');
        	}
    }).addTo(mymap);
</script>