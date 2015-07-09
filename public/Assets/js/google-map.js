/*
    Google maps
*/

function initialize() {
  var myLatlng = new google.maps.LatLng(16.4146536,120.5927134);
  var mapOptions = {
    zoom: 17,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  // var marker = new google.maps.Marker({
  //     position: myLatlng,
  //     map: map,
  //     title: 'RAJ. Technologies Inc.'
  // });
}

google.maps.event.addDomListener(window, 'load', initialize);
