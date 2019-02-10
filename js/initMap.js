// map function with location long and lati of vanarts
function initMap() {
	var location = {
		lat: 49.2826982,
		lng: 123.1153577
	};
	var map = new google.maps.Map(document.getElementById("map"), {
		zoom: 4,
		center: location
	});
	var marker = new google.maps.Marker({
		position: location,
		map: map
	});
}