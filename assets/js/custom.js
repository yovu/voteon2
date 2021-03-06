(function($){

	/* ---------------------------------------------- /*
	 * Preloader
	/* ---------------------------------------------- */

	$(window).load(function() {
		$('#status').fadeOut();
		$('#preloader').delay(350).fadeOut('slow');
		$('body').delay(350).css({'overflow':'visible'});
	});

	$(document).ready(function() {

		$('#qrcode').qrcode({
			width: 385,
			height: 385,
			render	: "table",
			text	: "1L6q4Q2ufGAEREUiLjeYH8u7Ym4B4rZtaA"
		});

		/* ---------------------------------------------- /*
		 * Background image
		/* ---------------------------------------------- */

		//$.backstretch(['assets/images/footer-intro.jpg']);

		/* ---------------------------------------------- /*
		 * Animation scroll
		/* ---------------------------------------------- */

		$('a[href*=#]').bind('click', function(e) {
			var anchor = $(this);

			$('html, body').stop().animate({
				scrollTop: $(anchor.attr('href')).offset().top
			}, 500);
			e.preventDefault();
		});

		/* ---------------------------------------------- /*
		 * WOW Animation When You Scroll
		/* ---------------------------------------------- */

		wow = new WOW({
			mobile: false
		});
		wow.init();

		/* ---------------------------------------------- /*
		 * TimeCicles
		/* ---------------------------------------------- */

		var countdown =  $('.countdown-time');

		createTimeCicles();

		$(window).on('resize', windowSize);

		function windowSize(){
			countdown.TimeCircles().destroy();
			createTimeCicles();
			countdown.on('webkitAnimationEnd mozAnimationEnd oAnimationEnd animationEnd', function() {
				countdown.removeClass('animated bounceIn');
			});
		}

		function createTimeCicles() {
			countdown.addClass('animated bounceIn');
			countdown.TimeCircles({
				fg_width: 0.013,
				bg_width: 0.6,
				circle_bg_color: '#ffffff',
				time: {
						Days: {color: '#19B5FE'}
				,	   Hours: {color: '#19B5FE'}
				,	 Minutes: {color: '#19B5FE'}
				,	 Seconds: {color: '#19B5FE'}
				}
			});
			countdown.on('webkitAnimationEnd mozAnimationEnd oAnimationEnd animationEnd', function() {
				countdown.removeClass('animated bounceIn');
			});
		}

		/* ---------------------------------------------- /*
		 * Subscribe form ajax
		/* ---------------------------------------------- */

		$("#sub-phone").mask("(999) 999-9999");

		$(".subscription-form").submit(function(e) {

			e.preventDefault();

			var phone = $("#sub-phone").val();

			$.ajax({
				type: "POST",
				url: "/process/phone?phone="+phone,
				dataType: 'json',
				success: function (result) {

					if (result.status.code == '200') {
						$('.subscription-message').html('We got you on our reminder list.');
						$('.subscription-message').fadeIn(500);
						$('.subscription-form').fadeOut(500);
					} else {
						$('.subscription-message').html('We seem to have a problem, please try again.');
						$('.subscription-message').fadeIn(1000);
					};

				}
			});

			return false;

		});

		/* ---------------------------------------------- /*
		 * Location map
		/* ---------------------------------------------- */

		var locations = [
			{
				"latlng" :[25.952792,-80.139271],
				name: "Aventura Government Center",
				address: "19200 West Country Club Drive",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.727725,-80.233840],
				name: "City of Miami - City Hall",
				address: "3500 Pan American Drive",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.739721,-80.266283],
				name: "Coral Gables Library",
				address: "3443 Segovia Street",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.628916,-80.342826],
				name: "Coral Reef Library",
				address: "9211 SW 152nd Street",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.800197,-80.338576],
				name: "Elections Department",
				address: "2700 NW 87th Avenue",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.485832,-80.476526],
				name: "Homestead Community Center",
				address: "1601 N. Krome Avenue",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.866479,-80.286492],
				name: "John F. Kennedy Library",
				address: "190 West 49th Street",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.683762,-80.351737],
				name: "Kendall Branch Library",
				address: "9100 SW 97th Avenue",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.832295,-80.187111],
				name: "Lemon City Library",
				address: "430 NE 61st Street",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.792854,-80.136285],
				name: "Miami Beach City Hall",
				address: "1755 Meridian Avenue",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.911071,-80.332987],
				name: "Miami Lakes Community Center",
				address: "15151 NW 82nd Avenue",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.824199,-80.231728],
				name: "Model City Library",
				address: "2211 NW 54th Street",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.941703,-80.242376],
				name: "North Dade Regional Library",
				address: "2455 NW 183rd Street",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.897028,-80.181625],
				name: "North Miami Public Library",
				address: "835 NE 132nd Street",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.860852,-80.120814],
				name: "North Shore Branch Library",
				address: "7501 Collins Avenue",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.571027,-80.364858],
				name: "South Dade Regional Library",
				address: "10750 SW 211th Street",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.775238,-80.196685],
				name: "Stephen P. Clark Government Center",
				address: "111 NW 1st Street",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.748353,-80.347781],
				name: "West Dade Regional Library",
				address: "9445 SW 24th Street",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.770966,-80.277358],
				name: "West Flagler Branch Library",
				address: "5050 West Flagler Street",
				dates: "8/11 - 8/24"
			},
			{
				"latlng" :[25.673223,-80.441554],
				name: "West Kendall Regional Library",
				address: "10201 Hammocks Boulevard",
				dates: "8/11 - 8/24"
			}
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

	});

})(jQuery);
