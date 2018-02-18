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
              infowindow.setContent(results[0].formatted_address);
              infowindow.open(map, marker);
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
      }


function sendData(){
            console.log('hello');
            fd.append("coordinates", document.getElementById("latlng").value);
         
                fetch("database_init.php",{
                    credentials: 'same-origin',
                    method:"POST",
                    body:fd
                })
}