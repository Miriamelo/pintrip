window.fbAsyncInit = function() {
    FB.init({
      appId      : '399196777217210',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.12'
    });

    FB.AppEvents.logPageView();   

};

(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

//checks if a person is already logged in, trigger a call to Facebook to get the login status

FB.getLoginStatus(function(response) {
    //function that processes response
    statusChangeCallback(response);
});

//callback function
function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}