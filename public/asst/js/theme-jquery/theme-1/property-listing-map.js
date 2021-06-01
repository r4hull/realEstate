	"use script";

	var map = null;
	google.maps.event.addDomListener(window, 'load', init);

	function init() {
		// Basic options for a simple Google Map
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: 15,
			scrollwheel: false,

			// The latitude and longitude to center the map (always required)
			center: new google.maps.LatLng(40.8723929,-73.5362968),  // New York
			

			// How you would like to style the map.
			// This is where you would paste any style found on Snazzy Maps.
			styles: [
						{
							"featureType": "all",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"saturation": 0
								},
								{
									"color": "#333333"
								},
								{
									"lightness": 0
								}
							]
						},
						{
							"featureType": "all",
							"elementType": "labels.text.stroke",
							"stylers": [
								{
									"visibility": "on"
								},
								{
									"color": "#ffffff"
								},
								{
									"lightness": 16
								}
							]
						},
						{
							"featureType": "all",
							"elementType": "labels.icon",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						},
						{
							"featureType": "administrative",
							"elementType": "geometry.fill",
							"stylers": [
								{
									"color": "#000000"
								},
								{
									"lightness": 20
								}
							]
						},
						{
							"featureType": "administrative",
							"elementType": "geometry.stroke",
							"stylers": [
								{
									"color": "#d6d6d6"
								},
								{
									"lightness": 0
								},
								{
									"weight": 1.2
								}
							]
						},
						{
							"featureType": "landscape",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#d9d9d9"
								},
								{
									"lightness": 0
								}
							]
						},
						{
							"featureType": "poi",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#f0f0f0"
								},
								{
									"lightness": 0
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#cecece"
								},
								{
									"gamma": "0"
								},
								{
									"weight": "0"
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "geometry.fill",
							"stylers": [
								{
									"color": "#cecece"
								},
								{
									"lightness": 17
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "geometry.stroke",
							"stylers": [
								{
									"color": "#d9d9d9"
								},
								{
									"lightness": 29
								},
								{
									"weight": 0.2
								}
							]
						},
						{
							"featureType": "road.arterial",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#b0b0b0"
								},
								{
									"lightness": 18
								}
							]
						},
						{
							"featureType": "road.local",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#ffffff"
								},
								{
									"lightness": 0
								}
							]
						},
						{
							"featureType": "transit",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#b0b0b0"
								},
								{
									"lightness": 19
								}
							]
						},
						{
							"featureType": "water",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#A3CCFF"
								},
								{
									"lightness": 0
								}
							]
						}
					]
		};

		// Get the HTML DOM element that will contain your map
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('map');

		// Create the Google Map using our element and options defined above
		map = new google.maps.Map(mapElement, mapOptions);
		
		var markers = [
			{
				position: new google.maps.LatLng(40.8723929,-73.5362968),
				map: map,
				title: 'Snazzy! 1',
				icon: 'assets/images/map-marker.png'
			},
			{
				position: new google.maps.LatLng(40.8738425,-73.5413247),
				map: map,
				title: 'Snazzy! 2',
				icon: 'assets/images/map-marker.png'
			},
			{
				position: new google.maps.LatLng(40.8753582,-73.5672298),
				map: map,
				title: 'Snazzy! 3',
				icon: 'assets/images/map-marker.png'  
			},
			{
				position: new google.maps.LatLng(40.8732259,-73.5335495),  
				map: map,
				title: 'Snazzy! 3',
				icon: 'assets/images/map-marker.png'
			},
			{
				position: new google.maps.LatLng(40.870055,-73.5339297),  
				map: map,
				title: 'Snazzy! 3',
				icon: 'assets/images/map-marker.png'
			},
			{
				position: new google.maps.LatLng(40.8721972,-73.5326266),  
				map: map,
				title: 'Snazzy! 3',
				icon: 'assets/images/map-marker.png'
			},
			{
				position: new google.maps.LatLng(40.8702516,-73.5273743),  
				map: map,
				title: 'Snazzy! 3',
				icon: 'assets/images/map-marker.png'
			},
			{
				position: new google.maps.LatLng(40.8690791,-73.5077748),  
				map: map,
				title: 'Snazzy! 3',
				icon: 'assets/images/map-marker.png'
			},
			{
				position: new google.maps.LatLng(40.8838527,-73.5322942),  
				map: map,
				title: 'Snazzy! 3',
				icon: 'assets/images/map-marker.png'
			},
		];

		// Let's also add a marker while we're at it		
		var markerObj = [];
		$.each(markers, function(index, markerConfig) {
				 markerObj.push(new google.maps.Marker(markerConfig)) ;			
		});

		// init styles
		mapStylesInit();

	}