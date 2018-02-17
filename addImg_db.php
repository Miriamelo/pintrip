<?php
    header("Access-Control-Allow-Origin: *");
    $servername = "hangman.taliawalkey.ca";
    $dblogin = "ec2-u";
    $password = "Talia";
    $dbname = "pintrip_db";
    
   //var_dump($_POST);
     
     console.log('hello');
     
/*
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         $sql = "SELECT * FROM Photos";
        
        $photo = $_POST['photo'];
        $coordinates = $_POST['coordinates'];
        $place_name = $_POST['place_name'];
        $date = $_POST['date'];
        
      
        $sql = "INSERT INTO Photos (photo, coordinates, place_name, date) VALUES ('$photo', '$coordinates', '$place_name', '$date')";
        $conn->exec($sql);*/
?>