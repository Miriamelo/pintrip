function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    if (response.status === 'connected') {
        showData();
    } else {
        FB.api('/me', function(response) {
            window.location = "index.php";
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

function showData(){
    FB.api('/me','GET', {fields: 'name,email,id,picture.width(150).height(150)'}, function(response) {
    var loginData = "name="+response.name+"&email="+response.email+"&fb_Id="+response.id+"&picture="+response.picture.data.url;

    console.log('Successful login for: ' + response.name); 
    console.log(JSON.stringify(response));
    console.log(loginData);
        
    //ajax request to server
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST", "logindata.php", true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.onreadystatechange = function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById('response').innerHTML = xmlhttp.responseText;
        };
      }
      xmlhttp.send(loginData);
    
    document.getElementById('myName').innerHTML = response.name;
    document.getElementById('profilePic').src = response.picture.data.url;
}