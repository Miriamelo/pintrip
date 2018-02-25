function addtobucket()
{
    var user = document.getElementById("username").value;
        console.log(user);
    var data = "user_name=" + user;
    var xhr;
    if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) { // IE 8 and older
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    
     xhr.open("POST", "game-info.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data);
    
	 xhr.onreadystatechange = display_data;
    
	function display_data() {
	 if (xhr.readyState == 4) {
      if (xhr.status == 200) {
       document.getElementById("username_display").innerHTML = xhr.responseText;
          
          console.log("Done!");
      } else {
        alert('There was a problem with the request.');
      }
     }
	}
}