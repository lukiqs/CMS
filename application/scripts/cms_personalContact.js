/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var marker = null;
var x = null;
var y = null;
var map = null;

$(document).ready(function(){
    tinymce.init({ selector:'textarea' });
    
    loadData();
    
   $("#action_save").click(function() {
       name = document.getElementById("name").value;
       //content = $('#edit').froalaEditor('html.get', true);
       content = tinyMCE.get('edit').getContent();
       if(name != "" && content !="" && x != null && y != null)
           $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               name : name,
               content : content,
               x : x,
               y : y
            },
            success : function(json) {
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
            });
   });
});

//$(function(){
//  $('#edit').on('froalaEditor.contentChanged froalaEditor.initialized', function (e, editor) {
//    
//  }).froalaEditor({enter: $.FroalaEditor.ENTER_BR});
//  
//});

function loadData(){
    $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               get : true
            },
            success : function(json) {
                if(json['x'] != null){
                    //$('#edit').froalaEditor('html.set', json['content']); 
                    //document.getElementById("edit").innerHTML = json['content'];
                    tinyMCE.get('edit').setContent(json['content']);
                    document.getElementById("name").value = json['name'];
                    x = json['x'];
                    y = json['y'];
                    myMap();
                    marker.setPosition(new google.maps.LatLng(x, y));
                    map.setCenter(new google.maps.LatLng(x, y),1);
                    map.setZoom(17);
                    
                }
                
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
            });
}

function myMap() {
var mapProp= {
    center:new google.maps.LatLng(52.06600028274635,19.88525390625),
    zoom:6,
    mapTypeId: 'terrain',
    styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ebe3cd"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#523735"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f1e6"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#c9b2a6"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#dcd2be"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#ae9e90"
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#93817c"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#a5b076"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#447530"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f1e6"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#fdfcf8"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f8c967"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#e9bc62"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e98d58"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#db8555"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#806b63"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8f7d77"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#ebe3cd"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#b9d3c2"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#92998d"
      }
    ]
  }
]
};
map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
marker = new google.maps.Marker({
    position: new google.maps.LatLng(x, y),
    map: map,
    animation: google.maps.Animation.BOUNCE,
    icon : 'http://www.allurecast.com/wp-content/themes/paperplane/images/marker.png'
  });
google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(map, event.latLng);
  });
  
  infowindow.open(map,marker);

}

function placeMarker(map, location) {
  x = location.lat();
  y = location.lng();
  marker.setPosition(location);
}