function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    if (response.status === 'connected') {
      testAPI();

    } else if (response.status === 'not_authorized') {
      FB.login(function(response) {
        statusChangeCallback2(response);
      }, {scope: 'public_profile,email'});

    } else {
      alert("not connected, not logged into facebook, we don't know");
    }
  }

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
    console.log(response);
  });
}

//access token response
FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {            console.log(response.authResponse.accessToken);
  }
});

FB.api('/me', function(response) {
    console.log(JSON.stringify(response));
});

function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
}

window.fbAsyncInit = function() {
    FB.init({
      appId      : '399196777217210',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.12'
    });

    FB.AppEvents.logPageView();   

};