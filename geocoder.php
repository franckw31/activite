<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Use the geocoder without a map</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js"></script>

<style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
 
<style>
#geocoder {
z-index: 1;
margin: 20px;
}
.mapboxgl-ctrl-geocoder {
min-width: 100%;
}
</style>
 
<div id="geocoder"></div>
<pre id="result"></pre>
 
<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoiZnJhbmNrdzMxIiwiYSI6ImNsbmJqemU5cjA0MDYya3RkczNrMHdqb2wifQ.6NLEMz-lShL80j9QuGW9cA';
const geocoder = new MapboxGeocoder({
accessToken: mapboxgl.accessToken,
types: 'country,region,place,postcode,locality,neighborhood'
});
 
geocoder.addTo('#geocoder');
 
// Get the geocoder results container.
const results = document.getElementById('result');
 
// Add geocoder result to container.
geocoder.on('result', (e) => {
results.innerText = JSON.stringify(e.result, null, 2);
});
 
// Clear results container when search is cleared.
geocoder.on('clear', () => {
results.innerText = '';
});
</script>
 
</body>
</html>