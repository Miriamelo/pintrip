<?php
        include_once "database_init.php";

        $sql = "SELECT * FROM Photos";
        
        $photo = $_POST['photo'];
        $coordinates = $_POST['coordinates'];
        $place_name = $_POST['place_name'];
        $date = $_POST['date'];
      
        $sql = "INSERT INTO Photos (photo,coordinates,place_name,date) VALUES ('$photo', '$coordinates', '$place_name', '$date')";
        $conn->exec($sql);
        
?>