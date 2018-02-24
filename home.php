<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Pintrip</title>
    <link rel="stylesheet" type="text/css" href="addImg.css">
    <script type='text/javascript' src='addImg.js'></script> 
    <script type='text/javascript' src='home.js'></script> 
  </head>
  <body onload="initCoords(); findPos();">
      <div id='topBar'>
          <h1 id='topText'>PINTRIP</h1>
      </div>
      
    <div id="floating-panel">
      <input id="latlng" type="text" value="63.714224,-73.961452">
      <!--<input id="submit" type="button" value="Save Location">-->
    </div>
      
    <div id='openInfo'>
      <h2 class="openInfoText" id='closeX'>X</h2>
      <img src="assets/holiday.jpg" id='openInfoImg'/>
      <h2 class='openInfoText' id='titleText'>This is the Place</h2>
      <p class='openInfoText' id='bodyText'>This is the location</p>
    </div>
      
<!-- map background -->      
    <div id="map"></div>
    
<!--bottom bar-->
      <div id='bottomBar'>
          <img src="assets/home-icon-blue.svg" class='barImg'/>  
          <img src="assets/bucketlist-icon.svg" class='barImg'/>
          <img src="assets/add-icon.svg" class='barImg' id='submit'/>
          <a href="explore.html"><img src="assets/explore-icon.svg" class='barImg'/></a> 
          <img src="assets/user-icon.svg" class='barImg'/>
      </div>
      
   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkFlD1s3Mkc6gTU6ER65juJEiHUWgsDkw&libraries=places&callback=initMap">
    </script>
    
  </body>
</html>