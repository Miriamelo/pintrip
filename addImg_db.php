<?php
        include_once "database_init.php";

        $sql = "SELECT * FROM Photos";
        
        $photo = $_POST['photo'];
        $coordinates = $_POST['coordinates'];
        $place_name = $_POST['place_name'];
        $date = $_POST['date'];
      
        $sql = "INSERT INTO Photos (coordinates) VALUES ('$coordinates')";
        $conn->exec($sql);
        
?>

<?php/*
    header("Access-Control-Allow-Origin: *");
    $servername = "localhost";
    $dblogin = "ec2-user";
    $password = "";
    $dbname = "pintrip_db";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM Photos";
        
        $photo = $_POST['photo'];
        $coordinates = $_POST['coordinates'];
        $place_name = $_POST['place_name'];
        $date = $_POST['date'];
      
        $sql = "INSERT INTO Photos (photo, coordinates, place_name, date) VALUES ('$photo', '$coordinates', '$place_name', '$date')";
        $conn->exec($sql);
             
             
    } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "<p style='color: red;'>$error</p>";
    }*/
?>

