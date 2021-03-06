<?php
session_start();
//var_dump($_SESSION);
//console.log($_SESSION);
//phpinfo();
//echo session_id();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/landing.css">

    <title>PinTrip</title>
  </head>
  <body>
      <div id="landing">
        <nav>
          <a class="navbar-brand" href="http://pintrip.taliawalkey.ca">
            <img src="assets/pintrip-logo-horizontal.png" alt="PinTrip" class="logo-horizontal">
          </a>
        </nav>
        
        <div class="row">
            <div class="col-md-5 landing-text">
                <h1>Introducing PinTrip</h1>
                <p>An easy way to keep track of the places you've travelled.
                <br/>
                Save future trips to your bucketlist.
                </p>
                <button id="startBtn" class="btn btn-landing">
                START NOW
                </button>
            </div>
            <div class="col-md-5">
                <img src="assets/phone-mockup.png" class="mockup">
            </div>
        </div>
        
        <p class="footer text-center">Alynna Alcira | Miria Huber | Talia Walkey</p>
    </div>  
      
    <div id="fb-root"></div> 
    <div id="background">
        <div class="row">
            <div class="col-sm-4 text-center logo-div">
                    <img src="assets/PinTrip_Logo_White.svg" alt="Pin Trip Logo" class="logo img-responsive"/>
            </div>
            <div class="col-sm-8"></div>
        </div>
        
        <div id="status"></div>
        <div id="response"></div>
        
        <div class="row login-div">
            <div class="col-sm-12 text-center">
                <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"
                data-scope="public_profile, email" onlogin="checkLoginState();"     
                >
                </div>
            </div>
        </div>
    </div>  
      
    <!-- Optional JavaScript -->
    <script src="js/fb-login.js"></script>  
      
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php
    require_once 'logindata.php';
?>
