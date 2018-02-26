<?php
include_once "database_init.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Reverse Geocoding</title>
    <link rel="stylesheet" type="text/css" href="addImg.css">
    <script type='text/javascript' src='addImg.js'></script> 
  </head>
  <body onload="initCoords(); initMap(position); findPos();">
      <div id='topBar'>
          <h1 id='topText'>ADD NEW PLACE</h1>
      </div>
      
    <div id="floating-panel">
      <input id="latlng" type="text" name='coordinates'>
      <!--<input id="submit" type="button" value="Save Location">-->
    </div>
  
      
<!-- map background -->      
    <div id="map"></div>
    
      
      <div id='loadImgDiv'>
        <input id='loadImg' type="file" accept="image/*" capture="camera" name='photo'/>
      </div>
        
 <form id="imgForm" method="post" action="#">
        <button  
            onclick="saveIt();"
            id='saveAll'
            method='post'
            >Save Image
        </button>
        
<!--ALL OF THESE NEED TO BE HIDDEN-->
      <div class='hiddenEl' id='showcoords'></div>
      <div class='hiddenEl' id='lat' name='lat'></div>
      <div class='hiddenEl' id='lng' name='lng'></div>
      <div class='hiddenEl' id='place_name' name='place_name'></div>
      <div class='hiddenEl' id='curdate' name='date'></div>
      <div class='hiddenEl' id='photoDiv' name='photo'></div>
      <div class='hiddenEl' id='rating' name='rating'></div>
      <div class='hiddenEl' id='user' name='user'></div>
      <div class='hiddenEl' id='url' name='web_url'></div>
<!--ALL OF THESE NEED TO BE HIDDEN-->      
    </form>
    
    
<!--bottom bar-->
      <div id='bottomBar'>
          <a href="home.php">
                <img src="assets/home-icon-blue.svg" class='barImg'/> 
          </a>
          <a href="bucketlist.php">
                <img src="assets/bucketlist-icon.svg" class='barImg'/>
          </a>
          
                <img src="assets/add-icon.svg" class='barImg' id='submit'/>
          
          <a href="explore.html">
                <img src="assets/explore-icon.svg" class='barImg'/>
          </a> 
          <a href="profile.php">
                <img src="assets/user-icon.svg" class='barImg'/>
          </a>
      </div>
    
    <!--<img src="../assets/camera-icon.svg" class='barImg' type="file" accept="image/*" capture="camera"/>-->
 
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkFlD1s3Mkc6gTU6ER65juJEiHUWgsDkw&libraries=places&callback=initMap">
    </script>
    
  </body>
</html>