<!DOCTYPE html>
<html>
  <head>
    <title>MAP</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
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
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
    function initMap(){
    var options ={
      zoom:9,
      center:{lat: 13.4458, lng: -15.3061}
    }
 var map = new google.maps.Map(document.getElementById('map'), options);


       addMarker({lat: 13.4549, lng: -16.5790});
       addMarker({lat: 13.4794, lng: -16.6704});
       addMarker({lat: 13.4503, lng: -16.6881});
       addMarker({lat: 13.3998, lng: -16.7323});
       addMarker({lat: 13.2748, lng: -16.6409});
       addMarker({lat: 13.422, lng: -16.7264});
       addMarker({lat: 13.4347, lng: -14.6573});
       addMarker({lat: 13.4442, lng: -15.5386});
       addMarker({lat: 13.3094, lng: -14.2192});





      function addMarker(coords){
        var marker = new google.maps.Marker({
          position:coords,
          map:map
        })
      }
    }
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      // var map, infoWindow;
      // function initMap() {
      //   map = new google.maps.Map(document.getElementById('map'), {
      //     center: {lat: -34.397, lng: 150.644},
      //     zoom: 10
      //   });
      //   infoWindow = new google.maps.InfoWindow;

      //   // Try HTML5 geolocation.
      //   if (navigator.geolocation) {
      //     navigator.geolocation.getCurrentPosition(function(position) {
      //       var pos = {
      //         lat: position.coords.latitude,
      //         lng: position.coords.longitude
      //       };

      //       infoWindow.setPosition(pos);
      //       infoWindow.setContent('Location found.');
      //       infoWindow.open(map);
      //       map.setCenter(pos);
      //     }, function() {
      //       handleLocationError(true, infoWindow, map.getCenter());
      //     });
      //   } else {
      //     // Browser doesn't support Geolocation
      //     handleLocationError(false, infoWindow, map.getCenter());
      //   }
      // }

      // function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      //   infoWindow.setPosition(pos);
      //   infoWindow.setContent(browserHasGeolocation ?
      //                         'Error: The Gam taxi map service failed.' :
      //                         'Error: Your browser doesn\'t support gam taxi.');
      //   infoWindow.open(map);
      // }
     
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn_v0i69TWpqd-HhqNrxm8bUiRPLyxC0A&callback=initMap">
    </script>
  </body>
</html>
