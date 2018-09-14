<?php

//die(var_dump($query));?>


var rute = {
  "type": "FeatureCollection",
  "crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },

"features": [

<?php
foreach ($query as $f)
{
	echo '
	{"type": "Feature","properties": {"name": "'
		.$f->name
    . '","direction": "'
		.$f->direction
    . '","type": "'
		.$f->type
		. '"},"geometry": '
		.$f->geometry
		.'},';
}
?>
]};
