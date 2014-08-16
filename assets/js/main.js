;(function(){

	// Menu settings
	$('#menuToggle, .menu-close').on('click', function(){
		$('#menuToggle').toggleClass('active');
		$('body').toggleClass('body-push-toleft');
		$('#theMenu').toggleClass('menu-open');
	});

	var locations = [
		{
			"latlng" :[35.681382,139.766084],
			name: "Aventura Government Center",
			address: "19200 West Country Club Drive, Aventura FL",
			dates: "8/11 - 8/24"
		},
		{
			"latlng" :[35.630152,139.74044],
			name: "City of Miami - City Hall",
			address: "3500 Pan American Drive, Miami FL",
			dates: "8/11 - 8/24"
		}
	];

	var stationList = [
	{"latlng":[35.681382,139.766084],name:"Tokyo Station"},
	{"latlng":[35.630152,139.74044],name:"Shinagawa Station"},
	{"latlng":[35.507456,139.617585],name:"Shin-Yokohama Station"},
	{"latlng":[35.25642,139.154904],name:"Odawara Station"},
	{"latlng":[35.103217,139.07776],name:"Atami Station"},
	{"latlng":[35.127152,138.910627],name:"Mishima Station"},
	{"latlng":[35.142015,138.663382],name:"Shin-Fuji Station"},
	{"latlng":[34.97171,138.38884],name:"Shizuoka Station"},
	{"latlng":[34.769758,138.014928],name:"Kakegawa Station"},
	{"latlng":[34.703741,137.734442],name:"Hamamatsu Station"},
	{"latlng":[34.762811,137.381651],name:"Toyohashi Station"},
	{"latlng":[34.96897,137.060662],name:"Mikawa-Anjyo Station"},
	{"latlng":[35.170694,136.881637],name:"Nagoya Station"},
	{"latlng":[35.315705,136.685593],name:"Gifu-Hashima Station"},
	{"latlng":[35.314188,136.290488],name:"Yonehara Station"},
	{"latlng":[34.985458,135.757755],name:"Kyoto Station"},
	{"latlng":[34.73348,135.500109],name:"Shin-Osaka Station"}
	];

	var infoWnd, mapCanvas;
	function initialize() {
		//Creates a map object.
		var mapDiv = document.getElementById("map_canvas");
		mapCanvas = new google.maps.Map(mapDiv);
		mapCanvas.setMapTypeId(google.maps.MapTypeId.ROADMAP);

		//Creates a infowindow object.
		infoWnd = new google.maps.InfoWindow();

		//Mapping markers on the map
		var bounds = new google.maps.LatLngBounds();
		var station, i, latlng;
		for (i in locations) {
			//Creates a marker
			station = locations[i];
			latlng = new google.maps.LatLng(station.latlng[0], station.latlng[1]);
			bounds.extend(latlng);
			var marker = createMarker(
				mapCanvas, latlng, station.name, station.address
			);

			//Creates a sidebar button for the marker
			createMarkerButton(marker);
		}
		//Fits the map bounds
		mapCanvas.fitBounds(bounds);
	}
	function createMarker(map, latlng, title, address) {
		//Creates a marker
		var marker = new google.maps.Marker({
			position : latlng,
			map : map,
			title : title +'<br> '+ address
		});

		//The infoWindow is opened when the sidebar button is clicked
		google.maps.event.addListener(marker, "click", function(){
			infoWnd.setContent("<strong>" + title + "</title>");
			infoWnd.open(map, marker);
		});
		return marker;
	}
	function createMarkerButton(marker) {
		//Creates a sidebar button
		var ul = document.getElementById("marker_list");
		var li = document.createElement("li");
		var title = marker.getTitle();
		li.innerHTML = title;
		ul.appendChild(li);

		//Trigger a click event to marker when the button is clicked.
		google.maps.event.addDomListener(li, "click", function(){
			google.maps.event.trigger(marker, "click");
		});
	}
	google.maps.event.addDomListener(window, "load", initialize);

})(jQuery)
