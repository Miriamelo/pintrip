<?php
        include_once "database_init.php";

        $sql = "SELECT * FROM Photo";
        
        $photo = $_POST['photo'];
        $coordinates = $_POST['coordinates'];
        $place_name = $_POST['place_name'];
        $date = $_POST['date'];
        
      
        $sql = "INSERT INTO Photo (photo, coordinates, place_name, date) VALUES ('$photo', '$coordinates', '$place_name', '$date')";
        $conn->exec($sql);
?>