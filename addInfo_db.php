<?php
header("Access-Control-Allow-Origin: *");
    $servername = "pintrip.taliawalkey.ca";
    $dblogin = "talia185_pintrip";
    $password = "pintrip";
    $dbname = "talia185_pintrip_db";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//push info to ratings table            
            $sql = "SELECT * FROM trip_ratings";
            
            $place_name = $_POST['place_name'];
            $overall_rating = $_POST['overall_rating'];
            $web_url = $_POST['web_url'];
            
          
            $sql = "INSERT INTO trip_ratings (place_name,overall_rating,web_url)VALUES ('$place_name','$overall_rating','$web_url')";
            $conn->exec($sql);


    } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "<p style='color: red;'>$error</p>";
    }
  
        
?>