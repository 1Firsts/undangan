$(document).ready(function(){
'use strict';

//** Map **//
function initialize() {
var myLatlng = new google.maps.LatLng(-6.716664, 108.566664);
var mapOptions = {
zoom: 5,
disableDefaultUI: true,
scrollwheel: false,
center: myLatlng,
styles: [
{
	featureType: 'all',
	stylers: [
	{ saturation: -80 }
	]
},{
featureType: 'water',
elementType: 'geometry',
stylers: [
{ color: '#fbcad5'}
]
},{
featureType: 'poi.business',
elementType: 'labels',
stylers: [
{ visibility: 'off' }
]
}
]            
}
var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

var image = 'images/icon.png';
var myLatLng = new google.maps.LatLng(-6.7166638,108.5666644);
var beachMarker = new google.maps.Marker({
position: myLatLng,
map: map,
icon: image
});

}
google.maps.event.addDomListener(window, 'load', initialize);
});