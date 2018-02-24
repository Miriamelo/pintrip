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
          placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4'
        }, function(place, status) {
            
             
//this is not completely necessary for the user but makes it eaiser for development
            if (status === 'OK') {
                if (results[0]) {
                  map.setZoom(16);
                    var marker = new google.maps.Marker({
                        position: latlng,
                        map: map
                    });
                    
            google.maps.event.addListener(marker, 'click', function() {
              infowindow.setContent('<div><strong>' + place.vicinity + '</strong><br>' +
                'Price: ' + place.price_level + '<br>' +
                'Rating: ' + place.rating + '<br>' +'</div>');
              infowindow.open(map, this);
            });
            
//show common name for your location
//WE NEED TO SEND formatted_address TO THE DATABASE
             //infowindow.setContent(results[0].formatted_address + '</br>' + results[0].price_level);
              
              //document.getElementById('place_name').innerHTML = results[0].formatted_address;
              //console.log('hello');
              
              //infowindow.open(map, marker);
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
      

function saveImage(){
        document.getElementById("imgForm").onsubmit = function (ev) {
            ev.preventDefault();
            
                var fd = new FormData();
                    fd.append("lat", document.getElementById("lat").innerHTML);
                    fd.append("lng", document.getElementById("lng").innerHTML);
                    fd.append("place_name", document.getElementById("place_name").innerHTML);
                    fd.append("date", document.getElementById("curdate").value);
                    
                        fetch("addImg_db.php",{
                            credentials: 'same-origin',
                            method:"POST",
                            body:fd
                        })
                        /*.then((resp)=>{return resp.text()}).then((json)=>{console.log(json)
                            window.location.href = "landingLogin.php";
                        });*/
}}



















