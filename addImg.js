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
    
    var showLat = document.getElementById('lat').innerHTML= location.lat;
    var showLng = document.getElementById('lng').innerHTML= location.lng;
    
        var thisPos= document.getElementById("latlng").innerHTML = location;
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
    }
            
            var pos = navigator.geolocation.getCurrentPosition(success, error, options);
}

      function geocodeLatLng(geocoder, map, infowindow) {
//get current date
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            
            var yyyy = today.getFullYear();
            if(dd<10){
                dd='0'+dd;
            } 
            if(mm<10){
                mm='0'+mm;
            } 
            var today = yyyy+'-'+mm+'-'+dd;
            var curdate = document.getElementById("curdate").value = today;
            console.log(curdate);
          
//get the coordinates from the input and show the common name for your location
            var lat = document.getElementById('lat').innerHTML;
            var lng = document.getElementById('lng').innerHTML;
            var latlng = lat + ', ' + lng;
            console.log(latlng);
            
            var input = latlng;
            var latlngStr = input.split(',', 2);
            var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
                geocoder.geocode({'location': latlng}, function(results, status) {
                         
//SET UP PLACES
        var service = new google.maps.places.PlacesService(map);

        service.getDetails({
          placeId: results[0].place_id
        }, function(place, status) {
            
             
//this is not completely necessary for the user but makes it eaiser for development
            if (status === 'OK') {
                if (results[0]) {
                  map.setZoom(16);
                    var marker = new google.maps.Marker({
                        placeId: results[0].place_id,
                        position: latlng,
                        map: map
                    });
                    
              infowindow.setContent('<div><strong>' + place.formatted_address + '</strong><br>' +
                'Rating: ' + place.rating + '<br>' +
                'url: ' + place.opening_hours + '<br>'+'</div>');
              infowindow.open(map, marker);
              
             var place_name = document.getElementById('place_name').innerHTML = place.formatted_address;
             console.log(place_name);
             
             var url = document.getElementById('url').innerHTML = place.icon;
             console.log(url);
              
             var insRating = document.getElementById('rating').innerHTML=place.rating;
              
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        
        });
        
        });
//END SET UP PLACES
      }
      
function getUserNum(){
        var curuser = document.getElementById('user').innerHTML = 'this is user 1';
        console.log(curuser);
}      
      
      
function saveIt(){
    document.getElementById("imgForm").onsubmit = function (ev) {
            ev.preventDefault();
            
    }

                var fd = new FormData();
                    fd.append("lat", document.getElementById("lat").innerHTML);
                    fd.append("lng", document.getElementById("lng").innerHTML);
                    fd.append("place_name", document.getElementById("place_name").innerHTML);
                    fd.append("date", document.getElementById("curdate").value);
                    fd.append("ratings", document.getElementById("rating").value);
                    fd.append("user", document.getElementById("user").innerHTML);
                    
                        fetch("addImg_db.php",{
                            credentials: 'same-origin',
                            method:"POST",
                            body:fd
                        })
                        /*.then((resp)=>{return resp.text()}).then((json)=>{console.log(json)
                            window.location.href = "landingLogin.php";
                        });*/

                var f2d = new FormData();
                    f2d.append("place_name", document.getElementById("place_name").innerHTML);
                    f2d.append("overall_rating", document.getElementById("rating").value);
                    f2d.append("web_url", document.getElementById("web_url").innerHTML);
                    
                        fetch("addInfo_db.php",{
                            credentials: 'same-origin',
                            method:"POST",
                            body:f2d
                        })
                        /*.then((resp)=>{return resp.text()}).then((json)=>{console.log(json)
                            window.location.href = "landingLogin.php";
                        });*/
}
















