<div id="mapid"></div>
<script src="<?php echo base_url() ;?>js/projs.js"></script>
<script src="<?php echo base_url() ;?>user/rute/db"></script>
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

	L.geoJSON(rute,{
		style: function (feature) {
		    return {
		    	color: "blue",
			    opacity: 1,
			    clickable: true
				 	};
		},
            onEachFeature: function (feature, layer) {
            layer.bindPopup('<table class="table table-striped table-bordered table-condensed">' +
				'<tr><th>Nama Trayek</th><td>' + feature.properties.name + '</td></tr>' +
				'<tr><th>Direction</th><td>' + feature.properties.direction + '</td></tr>' +
				'<tr><th>Tipe</th><td>' + feature.properties.type + '</td></tr>' + '<table>');
        	}
    }).addTo(mymap);
</script>