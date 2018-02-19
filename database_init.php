<?php
//provide your hostname, username and dbname

echo 'show this';

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

?>