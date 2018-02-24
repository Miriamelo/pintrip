<?php

header("Access-Control-Allow-Origin: *");
    $servername = "pintrip.taliawalkey.ca";
    $dblogin = "talia185_pintrip";
    $password = "pintrip";
    $dbname = "talia185_pintrip_db";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "<p style='color: red;'>$error</p>";
    }
    
?>