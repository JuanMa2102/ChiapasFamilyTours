(function(A) {

	if (!Array.prototype.forEach)
		A.forEach = A.forEach || function(action, that) {
			for (var i = 0, l = this.length; i < l; i++)
				if (i in this)
					action.call(that, this[i], i, this);
			};

		})(Array.prototype);

		var
		mapObject,
		markers = [],
		markersData = {

			'TuxtlaGutierrez': [
			{
				name: 'Tuxtla Gutiérrez',
				location_latitude: 16.7698094, 
				location_longitude:-93.2520506,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Tuxtla Gutiérrez',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},

			{
				name: 'Cañon del sumidero',
				location_latitude: 16.8276654, 
				location_longitude: -93.1495693,
				map_image_url:'img/pins/walking.png',
				name_point: 'Cañon del sumidero',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},

			{
				name: 'Parque de la marimba',
				location_latitude: 16.7553324, 
				location_longitude:-93.1251634,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Parque de la marimba',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},
			{
				name: 'Restaurante las pichanchas',
				location_latitude: 16.752847, 
				location_longitude:-93.1119577,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Restaurante "Las Pichanchas"',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},
			{
				name: 'ZOOMAT',
				location_latitude: 16.725035, 
				location_longitude:-93.0958993,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Zoologico Miguel Alvarez del Toro(ZOOMAT)',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},
			{
				name: 'Museo del cafe',
				location_latitude: 16.7544492, 
				location_longitude:-93.1164763,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Museo del cafe',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},
			{
				name: 'Cristo de Chiapas',
				location_latitude: 16.7194877, 
				location_longitude:-93.1237032,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Cristo de Chiapas',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},
			{
				name: 'La fosa de las Cotorras',
				location_latitude: 16.7194877, 
				location_longitude:-93.1237032,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'La fosa de las cotorras',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},
			{
				name: 'Cañon rio la venta',
				location_latitude: 16.7513158, 
				location_longitude:-93.4794175,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Cañon rio la venta y cascada "El Aguacero"',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},
			],
			'Sightseeing': [
			{
				name: 'Open Bus',
				location_latitude: 48.865633, 
				location_longitude: 2.321236,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Open Bus',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},
			{
				name: 'Senna River Tour',
				location_latitude: 48.854183,
				location_longitude: 2.354808,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Senna River Tour',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			}
			],
			'Museums': [
			{
				name: 'Louvre',
				location_latitude: 48.863893, 
				location_longitude: 2.342348,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Louvre',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},
			{
				name: 'Pompidou ',
				location_latitude: 48.860642,
				location_longitude: 2.352245,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Pompidou',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			}
			],
			'Chiapadecorzo': [
			{
				name: 'Chiapa de corzo',
				location_latitude:16.7257264, 
				location_longitude:-93.0529713,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Chiapa de Corzo',
				description_point: 'Pueblo Magico, hogar del cañon del sumidero',
				url_point: 'single_tour.html'
			},
			{
				name: 'Montparnasse',
				location_latitude: 48.837273,
				location_longitude: 2.335387,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Montparnasse',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			}
			],
			'Sancris': [
			{
				name: 'San Cristobal de las Casas',
				location_latitude:16.7312816, 
				location_longitude:-92.6774192,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'San Cristobal de las Casas',
				description_point: 'El pueblo magico más popular de Chiapas.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},
			{
				name: 'St. Germain des Prés',
				location_latitude: 48.853798,
				location_longitude: 2.333328,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'St. Germain des Prés',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			}
			],
			'Comitan': [
			{
				name: 'Comitan de Dominguez',
				location_latitude: 16.2327166, 
				location_longitude:-92.1653785,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Comitan de Dominguez',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},
			{
				name: 'Champs-Élysées',
				location_latitude: 48.865784,
				location_longitude: 2.307314,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Champs-Élysées',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			}
			],
			'Gucamayas': [
			{
				name: 'Las guacamayas',
				location_latitude: 16.2520736, 
				location_longitude:-90.8770457,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Las guacamayas',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},
			{
				name: 'Madeleine',
				location_latitude: 48.870587, 
				location_longitude: 2.318943,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Madeleine',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			}
			],
			'Yax': [
			{
				name: 'Zona Arqueologica "Yaxchilan"',
				location_latitude: 16.8984367, 
				location_longitude:-90.9665623,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Zona Arqueologica "Yaxchilan"',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},
			{
				name: 'Madeleine',
				location_latitude: 48.870587, 
				location_longitude: 2.318943,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Madeleine',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			}
			],
			'Palenque': [
			{
				name: 'Palenque',
				location_latitude:17.5079146, 
				location_longitude:-91.9901623,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Palenque',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},
			{
				name: 'Madeleine',
				location_latitude: 48.870587, 
				location_longitude: 2.318943,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Madeleine',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			}
			],
			'Villa': [
			{
				name: 'Villahermosa',
				location_latitude:17.992517, 
				location_longitude:-93.0231621,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Villahermosa',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			},
			{
				name: 'Madeleine',
				location_latitude: 48.870587, 
				location_longitude: 2.318943,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Madeleine',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
				get_directions_start_address: '',
				phone: '+3934245255',
				url_point: 'single_tour.html'
			}
			]


		};


			var mapOptions = {
				zoom: 9,
				center: new google.maps.LatLng(16.993168, -92.469378),
				mapTypeId: google.maps.MapTypeId.ROADMAP,

				mapTypeControl: false,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				panControl: false,
				panControlOptions: {
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				zoomControl: true,
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.LARGE,
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				 scrollwheel: false,
				scaleControl: false,
				scaleControlOptions: {
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				streetViewControl: true,
				streetViewControlOptions: {
					position: google.maps.ControlPosition.LEFT_TOP
				},
				styles: [
											 {
					"featureType": "landscape",
					"stylers": [
						{
							"hue": "#FFBB00"
						},
						{
							"saturation": 43.400000000000006
						},
						{
							"lightness": 37.599999999999994
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "road.highway",
					"stylers": [
						{
							"hue": "#FFC200"
						},
						{
							"saturation": -61.8
						},
						{
							"lightness": 45.599999999999994
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "road.arterial",
					"stylers": [
						{
							"hue": "#FF0300"
						},
						{
							"saturation": -100
						},
						{
							"lightness": 51.19999999999999
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "road.local",
					"stylers": [
						{
							"hue": "#FF0300"
						},
						{
							"saturation": -100
						},
						{
							"lightness": 52
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "water",
					"stylers": [
						{
							"hue": "#0078FF"
						},
						{
							"saturation": -13.200000000000003
						},
						{
							"lightness": 2.4000000000000057
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "poi",
					"stylers": [
						{
							"hue": "#00FF6A"
						},
						{
							"saturation": -1.0989010989011234
						},
						{
							"lightness": 11.200000000000017
						},
						{
							"gamma": 1
						}
					]
				}
				]
			};
			var
			marker;
			mapObject = new google.maps.Map(document.getElementById('map'), mapOptions);
			for (var key in markersData)
				markersData[key].forEach(function (item) {
					marker = new google.maps.Marker({
						position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
						map: mapObject,
						icon: 'img/pins/' + key + '.png',
					});

					if ('undefined' === typeof markers[key])
						markers[key] = [];
					markers[key].push(marker);
					google.maps.event.addListener(marker, 'click', (function () {
      closeInfoBox();
      getInfoBox(item).open(mapObject, this);
      mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
     }));
					
	});
	

		function hideAllMarkers () {
			for (var key in markers)
				markers[key].forEach(function (marker) {
					marker.setMap(null);
				});
		};
		function toggleMarkers (category) {
			hideAllMarkers();
			closeInfoBox();

			if ('undefined' === typeof markers[category])
				return false;
			markers[category].forEach(function (marker) {
				marker.setMap(mapObject);
				marker.setAnimation(google.maps.Animation.DROP);

			});
		};

		function closeInfoBox() {
			$('div.infoBox').remove();
		};

		function getInfoBox(item) {
			return new InfoBox({
				content:
				'<div class="marker_info" id="marker_info">' +
				'<img src="' + item.map_image_url + '" alt="Image"/>' +
				'<h3>'+ item.name_point +'</h3>' +
				'<span>'+ item.description_point +'</span>' +
				'<div class="marker_tools">' +
				'<form action="http://maps.google.com/maps" method="get" target="_blank" style="display:inline-block""><input name="saddr" value="'+ item.get_directions_start_address +'" type="hidden"><input type="hidden" name="daddr" value="'+ item.location_latitude +',' +item.location_longitude +'"><button type="submit" value="Get directions" class="btn_infobox_get_directions">Directions</button></form>' +
					'<a href="tel://'+ item.phone +'" class="btn_infobox_phone">'+ item.phone +'</a>' +
					'</div>' +
					'<a href="'+ item.url_point + '" class="btn_infobox">Details</a>' +
				'</div>',
				disableAutoPan: false,
				maxWidth: 0,
				pixelOffset: new google.maps.Size(10, 125),
				closeBoxMargin: '5px -20px 2px 2px',
				closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
				isHidden: false,
				alignBottom: true,
				pane: 'floatPane',
				enableEventPropagation: true
			});
		};
		function getInfoBox(item) {
			return new InfoBox({
				content:
				'<div class="marker_info_2">' +
				'<img src="' + item.map_image_url + '" alt="Image"/>' +
				'<h3>'+ item.name_point +'</h3>' +
				'<span>'+ item.description_point +'</span>' +
				'<div class="marker_tools">' +
				'<form action="http://maps.google.com/maps" method="get" target="_blank" style="display:inline-block""><input name="saddr" value="'+ item.get_directions_start_address +'" type="hidden"><input type="hidden" name="daddr" value="'+ item.location_latitude +',' +item.location_longitude +'"><button type="submit" value="Get directions" class="btn_infobox_get_directions">Directions</button></form>' +
					'<a href="tel://'+ item.phone +'" class="btn_infobox_phone">'+ item.phone +'</a>' +
					'</div>' +
					'<a href="'+ item.url_point + '" class="btn_infobox">Details</a>' +
				'</div>',
				disableAutoPan: false,
				maxWidth: 0,
				pixelOffset: new google.maps.Size(10, 125),
				closeBoxMargin: '5px -20px 2px 2px',
				closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
				isHidden: false,
				alignBottom: true,
				pane: 'floatPane',
				enableEventPropagation: true
			});
		};


function onHtmlClick(location_type, key){
     google.maps.event.trigger(markers[location_type][key], "click");
}