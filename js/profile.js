function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    if (response.status === 'connected') {
        FB.api('/me', function(response) {
            document.getElementById("myName").innerHTML = response.name;
        });
    } else {
        FB.api('/me', function(response) {
            window.location = "index.html";
            document.getElementById("myName").innerHTML = "You are not logged in!";
        });
    }
  }

function checkLoginState() {
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
}

window.fbAsyncInit = function() {
    FB.init({
      appId      : '399196777217210',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.12'
    });

    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });

};

// Load the SDK asynchronously
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));