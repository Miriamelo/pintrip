function initCoords() {
//activate geolocation
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(initMap);
      } else {
        showError("Your browser does not support Geolocation!");
      }
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
}

function initMap(position) {
//find current position
        var xlat = position.coords.latitude;
        var xlng = position.coords.longitude;
        var location = {lat: xlat, lng: xlng};
//zoom on your location
        var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 3,
              center: location
        });
    
//ADD THE COMMON NAME FROM THE USERS DATABASE
        var contentString = 'You have visited ' + location.lat + location.lng;

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
      
//THIS IS ALL OF THE COORDINATES FROM THE DB
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "home_db.php", true);
    xhttp.send();
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("printInfo").innerHTML = this.responseText;
                console.log(this.responseText);
        }
    };

        
//PRINT ALL OF THE PINS ON MAP 
        var loc = [{lat:xlat, lng:xlng}, {lat:46.5107, lng:63.4168}, {lat:46.5107, lng:100.4168}];
    
//var i=0;
    for (i = 0; i < loc.length; i++) { 
          var marker = new google.maps.Marker({
          position: loc[i],
          map: map,
          title: location
        });
        console.log(i);
    }
    i++;

        marker.addListener('click', function() {
          document.getElementById('openInfo').style.zIndex=300;
          document.getElementById('map').style.opacity=0.4;
          document.getElementById('topBar').style.opacity=0.4;
          document.getElementById('bottomBar').style.opacity=0.4;
        });
    
        map.addListener('click', function(){
          document.getElementById('openInfo').style.zIndex=0;
          document.getElementById('map').style.opacity=1.0;
          document.getElementById('topBar').style.opacity=1.0;
          document.getElementById('bottomBar').style.opacity=1.0;
        })
        
        document.getElementById('closeX').addEventListener('click', function(){
          document.getElementById('openInfo').style.zIndex=0;
          document.getElementById('map').style.opacity=1.0;
          document.getElementById('topBar').style.opacity=1.0;
          document.getElementById('bottomBar').style.opacity=1.0;
        });
      }
      
      



