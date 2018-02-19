<!--button-->

var wdPoints = 0;
var spPoints = 0;
var points = 0;
var stopGame = false;

var faceImg = document.getElementById ("face");
var totalPoints = document.getElementById("totalPoints");



function username()
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

function updatePoints()
{ 
    var xhr;
    if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) { // IE 8 and older
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var user = document.getElementById("username").value;
    document.getElementById("finalScore").style.display='block';
    document.getElementById('containergame').style.display = 'none';
    
    var data = "user_score=" + points + "&user_name="+user;
   xhr.open("POST", "update-info.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data); 
    
    xhr.onreadystatechange = display_data;
    
	function display_data() {
	 if (xhr.readyState == 4) {
      if (xhr.status == 200) {
       document.getElementById("finalScore").innerHTML = xhr.responseText;
          
          console.log("Done!");
      } else {
        alert('There was a problem with the request.');
      }
     }
	}
}

    
function spClick() {
            var spPtsDisplay = document.getElementById("spPoints");
            faceImg.src = "./img/laughing.svg"; 
            spPoints ++;
            spPtsDisplay.innerHTML = spPoints;
            points = wdPoints + spPoints;
            console.log(spPoints);
        }

function wdClick() {
            var wdPtsDisplay = document.getElementById("WdPoints");
            faceImg.src = "./img/laughing.svg"; 
            wdPoints ++;
            wdPtsDisplay.innerHTML = wdPoints;
            points = wdPoints + spPoints;
            console.log(wdPoints);
        }


<!-- randon button position -->

function getRandomPosition(element) {
	var x = document.body.offsetHeight-element.clientHeight;
	var y = document.body.offsetWidth-element.clientWidth;
	var randomX = Math.floor(Math.random()*x);
	var randomY = Math.floor(Math.random()*y);
	return [randomX,randomY];
}



function loadgame() {
    var gameplay = document.getElementById('containergame');
    gameplay.style.display = 'block';
    var namemodal = document.getElementById('modallogin');
    namemodal.style.display = 'none';
}



window.onload = function() {
    function foodFall() {
        
    if(stopGame) {
        clear();
        return;
          }
    
    
    setInterval(function (){
	var supernova = document.getElementById ('supernova');
    var whitedwarf = document.getElementById ('whitedwarf');
        
	supernova.setAttribute("style", "position:absolute;");
	var xy = getRandomPosition(supernova);
	supernova.style.top = xy[0] + 'px';
	supernova.style.left = xy[1] + 'px';
        
    whitedwarf.setAttribute("style", "position:absolute;");
	var xy = getRandomPosition(whitedwarf);
	whitedwarf.style.top = xy[0] + 'px';
	whitedwarf.style.left = xy[1] + 'px';
        
    totalPoints.innerHTML = points;
        
    faceImg.src = "./img/sad.svg";
    }, 1000);
    }
    
    setTimeout(foodFall, 20);
    }

        
        