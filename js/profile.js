

function showName(){
    FB.api('/me', function(response) {
        document.getElementById("myName").innerHTML = response.name;
    });
}
