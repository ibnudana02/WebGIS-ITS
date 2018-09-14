<?php

//die(var_dump($query));?>
var shelter = {
  "type": "FeatureCollection",
  "crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },

"features": [

<?php
foreach ($query as $f)
{
	echo '
	{"type": "Feature","properties": {"nama": "'
		.$f->nm_shelter
    . '","kota": "'
		.$f->kota
    . '","lat": "'
		.$f->lat
	. '","long": "'
		.$f->long
		. '"},"geometry": '
		.$f->geometry
		.'},';
}
?>
]};
