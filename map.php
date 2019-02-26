<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #map {
        height: 500px;
        width: 400px;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
      <script>
		function initMap() {
		var mapOptions = {
		  center: {lat: 14.841445, lng: 99.706138},
		  zoom: 12,
		}
			
		var maps = new google.maps.Map(document.getElementById("map"),mapOptions);
		
		var marker = new google.maps.Marker({
		   position: new google.maps.LatLng(14.841445, 99.706138),
		   map: maps,
		   title: 'โรงแรม ฉัตรแก้ว '
		});
	}
	  </script>, 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrz435klQh4tH5ZVEecMzonaIVu94FO3k&callback=initMap"
    async defer></script>
  </body>
</html>