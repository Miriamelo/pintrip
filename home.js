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

        var marker = new google.maps.Marker({
          position: location,
          map: map,
          title: location
        });
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


