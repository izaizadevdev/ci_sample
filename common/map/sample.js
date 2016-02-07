google.load("maps", "3.x", {"other_params":"sensor=false"});

//マップの初期設定
function initialize() {

//マップの中心座標
  var myLatLng = new google.maps.LatLng(13.723671,100.584249);

//マップの設定オプション
  var mapOptions = {
    zoom: 14,                                 //ズームレベル
    center: myLatLng,                         //中心座標
    mapTypeId: google.maps.MapTypeId.ROADMAP,  //マップタイプ
    mapTypeControlOptions: {
       mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'simple']
    }
	
  };

        


  var map = new google.maps.Map(document.getElementById("map"), mapOptions);
  //var image = 'img/pin.png';
  var icon = new google.maps.MarkerImage("/common/map/img/pin_building05.png",
    null, /* size is determined at runtime */
    null, /* origin is 0,0 */
    null, /* anchor is bottom center of the scaled image */
    new google.maps.Size(40, 43));
//printf(icon);
  var marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            animation: google.maps.Animation.DROP,
							icon: icon,
                            title: "Welcome to Monoqlo"
                        });
 
        var info = new google.maps.InfoWindow({
                            content: '<h1>Monoqlo Co., Ltd</h1><br><p>23/82 (21th Fl.) Sorachai Building, Soi Sukhumvit 63,<br> Sukhumvit Road, North Khlongtan, Watthana, Bangkok 10110</p>'
                        });
						
        google.maps.event.addListener(marker, 'click', function(){
            info.open(map, marker);
        });


 var samplestyle = [
    {
        "featureType": "water",
        "stylers": [
            {
                "saturation": 43
            },
            {
                "lightness": -11
            },
            {
                "hue": "#0088ff"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 99
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#808080"
            },
            {
                "lightness": 54
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ece2d9"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ccdca1"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#767676"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#b8cb93"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.sports_complex",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.medical",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.business",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    }
];

  var samplestyleOptions = {
    name: "Style"
  };
  
  var sampleMapType = new google.maps.StyledMapType(samplestyle, samplestyleOptions);
  map.mapTypes.set('simple', sampleMapType);
  map.setMapTypeId('simple');

	
}

//作成したマップの呼び出し
google.setOnLoadCallback(initialize);

