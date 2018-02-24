<?php
include_once "database_init.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Pintrip</title>
    <link rel="stylesheet" type="text/css" href="addImg.css">
    <script type='text/javascript' src='addImg.js'></script> 
  </head>
  <body onload="initCoords(); findPos();">
      <div id='topBar'>
          <h1 id='topText'>ADD NEW PLACE</h1>
      </div>
      
    <div id="floating-panel">
      <input id="latlng" type="text" value="63.714224,-73.961452" name='coordinates'>
      <!--<input id="submit" type="button" value="Save Location">-->
    </div>
       
<!-- map background -->      
    <div id="map"></div>
    
<!--bottom bar-->
      <div id='bottomBar'>
          <img src="assets/home-icon.svg" class='barImg'/>  
          <img src="assets/bucketlist-icon.svg" class='barImg'/>
          <img src="assets/add-icon-blue.svg" class='barImg' id='submit'/>
          <img src="assets/explore-icon.svg" class='barImg'/>
          <img src="assets/user-icon.svg" class='barImg'/>
      </div>
      
    <form id="imgForm" method="post">
        <input id='photo' type="file" accept="image/*" capture="camera" name='photo'/>

        <button  
            onclick="saveImage();" 
            id='saveAll'
            >Save Image
        </button>
    </form>
    
    <!--<img src="../assets/camera-icon.svg" class='barImg' type="file" accept="image/*" capture="camera"/>-->
      
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkFlD1s3Mkc6gTU6ER65juJEiHUWgsDkw&callback=initMap">
    </script>
  </body>
</html>

<!--AIzaSyCsx9JDAa6bkPiegmzMEelHLwcNyFX6J1A-->