<?php
header("Access-Control-Allow-Origin: *");
    $servername = "pintrip.taliawalkey.ca";
    $dblogin = "talia185_pintrip";
    $password = "pintrip";
    $dbname = "talia185_pintrip_db";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM photo";
            
            $photo = $_POST['photo'];
            $lat = $_POST['lat'];
            $lng = $_POST['lng'];
            $place_name = $_POST['place_name'];
            $date = $_POST['date'];
            $ratings = $_POST['ratings'];
          
         echo $sql;
         
            $conn->exec($sql);
            


    } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "<p style='color: red;'>$error</p>";
    }
  
        
?>