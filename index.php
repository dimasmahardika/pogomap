<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Pokemon Go Map STIKI Malang</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>-->
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAicXE2I6ctZU_zIxpLFOlMIhbo1-iXtNk&sensor=false"></script>
	
    <script>
function initialize() {

 <!--untuk menentukan posisi kordinat-->
  var myLatlng = new google.maps.LatLng(-7.9661335,112.607352);
  <!--var myLatlng = new google.maps.LatLng(-2.1788761,101.4415862);-->
  
  function addMarker(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        }

    
  var mapOptions = {
    zoom: 15,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var iconBase = 'https://i.imgur.com/';
  
  var icons = {
          Pikachu: {
            icon: iconBase + 'wHRUZPj.png'
          },
          Squirtle: {
            icon: iconBase + 'SSZfzoI.png'
          },
          Bulbasaur: {
            icon: iconBase + 'gILjwpK.png'
          },
		  JigglyPuff: {
            icon: iconBase + 'e5rClG5.png'
          },
		   Tangela: {
            icon: iconBase + 'dld5MTm.png'
          },
		  Slowpoke: {
            icon: iconBase + 'YG6Jxyk.png'
          }
        };
   
  
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!',
  });
  
      
  var features = [
          {
            position: new google.maps.LatLng(-7.972775, 112.607856),
            type: 'Pikachu'
          }, {
            position: new google.maps.LatLng(-7.968224, 112.607339),
            type: 'Pikachu'
          }, {
            position: new google.maps.LatLng(-7.965830, 112.606650),
            type: 'Tangela'
          }, {
            position: new google.maps.LatLng(-7.968052, 112.606143),
            type: 'Squirtle'
          }, {
            position: new google.maps.LatLng(-7.962944, 112.609420),
            type: 'Tangela'
          }, {
            position: new google.maps.LatLng(-7.968384, 112.607897),
            type: 'Squirtle'
          }, {
            position: new google.maps.LatLng(-7.967315, 112.604787),
            type: 'Slowpoke'
          }
        ];

        for (var i = 0, feature; feature = features[i]; i++) {
          addMarker(feature);
        }
  
  
  
  
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>