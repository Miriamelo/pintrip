function initCoords() {
//activate geolocation
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(initMap);
      } else {
        showError("Your browser does not support Geolocation!");
      }
}

function initMap(position) {
//find current position
        var coords = '';
        var xlat = position.coords.latitude;
        var xlng = position.coords.longitude;
        var location = {lat: xlat, lng: xlng};
    console.log(location);
    
//zoom on your location
        var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 10,
              center: location
        });
        var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;
        infowindow.id = 'infowindow';
    
//make new marker
        var marker = new google.maps.Marker({
                position: location,
                map: map
        });
            document.getElementById('submit').addEventListener('click', function() {
                geocodeLatLng(geocoder, map, infowindow);
            });
}

function findPos(){
//get your exact location and the accuracy of the results
        var options = {
          enableHighAccuracy: true,
          timeout: 5000,
          maximumAge: 0
        };

    function success(pos) {
            var crd = pos.coords;
            document.getElementById('latlng').value = crd.latitude + "," + crd.longitude;
    };

    function error(err) {
                console.warn('ERROR(${err.code}): ${err.message}');
    };
            
            var pos = navigator.geolocation.getCurrentPosition(success, error, options);
}

      function geocodeLatLng(geocoder, map, infowindow) {
//get the coordinates from the input and show the common name for your location
            var input = document.getElementById('latlng').value;
            var latlngStr = input.split(',', 2);
            var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
                geocoder.geocode({'location': latlng}, function(results, status) {
                    
//this is not completely necessary for the user but makes it eaiser for development
            if (status === 'OK') {
                if (results[0]) {
                  map.setZoom(16);
                    var marker = new google.maps.Marker({
                        position: latlng,
                        map: map
                    });
//show common name for your location
//WE NEED TO SEND formatted_address TO THE DATABASE
var address = infowindow.setContent(results[0].formatted_address);
              infowindow.open(map, marker);
        document.getElementById('infowindow').innerHTML=address;
                    
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
      }

function saveImage(){
    var coordinates = document.getElementById("latlng").value;
        console.log(coordinates);
    
    var place_name = document.getElementById("infowindow").value;
        console.log(infowindow.value);
    
    var data = "coordinates=" + coordinates;
    var xhr;
    if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) { // IE 8 and older
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    
     xhr.open("POST", "addImg_db.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data);

	 xhr.onreadystatechange = display_data;
    
	function display_data() {
	 if (xhr.readyState == 4) {
      if (xhr.status == 200) {
       document.getElementById("coordinates_display").innerHTML = xhr.responseText;
          
          console.log("Done!");
      } else {
        alert('There was a problem with the request.');
      }
     }
	}
}


/*
function saveImage(){
            var fd = new FormData();
            console.log('clicked');
            fd.append("email", document.getElementById("latlng").value);
            
            console.log(document.getElementById('latlng').value);
    
            console.log('appended');
    
                fetch("addImg_db.php",{
                    credentials: 'same-origin',
                    method:"POST",
                    body:fd
                })
            console.log('through');
}*/