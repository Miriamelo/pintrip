<?php
session_start();
//var_dump($_SESSION);
//console.log($_SESSION);
//phpinfo();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/explore.css">
    <link rel="stylesheet" type="text/css" href="addImg.css">

    <title>Profile | PinTrip</title>
  </head>
  <body>
    <div id="fb-root"></div> 
    <div id="background">
        <div class="row">
            <div class="col mtitle">
              PROFILE
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 text-center name-div">
                <img id="profilePic" alt="profile pic"/>
                <p>Name: 
                    <?php echo $_SESSION['user']['name'];?>
                    <span id="myName"></span>
                </p>
                <p>Email: 
                    <?php echo $_SESSION['user']['email'];?>
                </p>
            </div>
            <div class="col-sm-8"></div>
        </div>
                
        <div id="response"></div>
        
        <div class="row login-div">
            <div class="col-sm-12 text-center">
                <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"
                scope="public_profile,email" onlogin="checkLoginState();"     
                >
                </div>
            </div>
        </div>
    </div>  
      
      <?php include 'navbar.php'; ?>   
      
    <!-- Optional JavaScript -->
    <script src="js/fb-login.js"></script>  
    <script src="js/profile.js"></script>  
      
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>