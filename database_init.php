<?php

header("Access-Control-Allow-Origin: *");
    $servername = "http://54.186.123.71/";
    $dblogin = "ec2-user@54.186.123.71";
    $password = "";
    $dbname = "pintrip_db";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "<p style='color: red;'>$error</p>";
    }
/*
//provide your hostname, username and dbname

$host="localhost"; 
$username="ec2-user";  
$password="";
$db_name="pintrip_db"; 

$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
console.log("Connected successfully");

mysqli_select_db($conn, "$db_name");
*/
?>