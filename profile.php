<!doctype html>
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
                <p>Name: <span id="myName"></span></p>
            </div>
            <div class="col-sm-8"></div>
        </div>
                
        <div class="row login-div">
            <div class="col-sm-12 text-center">
                <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"
                scope="public_profile,email" onlogin="checkLoginState();"     
                >
                </div>
            </div>
        </div>
    </div>  
      
    <footer class="footer">
            <div class="container">
              <a href="index.html"><img src="assets/home-icon-blue.svg" class='barImg'/>  </a> 
              <img src="assets/bucketlist-icon.svg" class='barImg'/>
              <img src="assets/add-icon.svg" class='barImg' id='submit'/>
              <a href="explore.html"><img src="assets/explore-icon.svg" class='barImg'/></a>
              <img src="assets/user-icon.svg" class='barImg'/>
                </div>
        </footer>      
      
    <!-- Optional JavaScript -->
    <script src="js/fb-login.js"></script>  
    <script src="js/profile.js"></script>  
      
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>