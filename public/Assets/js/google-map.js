/*
    Google maps
*/

function initialize() {
  var myLatlng = new google.maps.LatLng(16.414480,120.590670);
  var mapOptions = {
    zoom: 16,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'RAJ. Technologies Inc.'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
