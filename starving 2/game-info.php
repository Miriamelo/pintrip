<?php
//provide your hostname, username and dbname
//$host="localhost"; 
//$username="poplassc_starving";  
//$password="p0o9Starving";
//$db_name="poplassc_whackamoledb"; 
//
//$conn = new mysqli($host, $username, $password);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
//console.log("Connected successfully");
//
//
//mysqli_select_db($conn, "$db_name");

include_once "database_init.php";

$user_name = $_POST['photo'];

$sql = "select photo from user where photo LIKE '$user_name%'";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO Photos (photo) VALUES ('$user_name')";

if ($conn->query($sql) === TRUE) {
    console.log("New record created successfully");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// then use mysqli_fetch_array
// and echo back the results 
echo "<b>".$user_name."</b>";
// and then close the connection 
mysqli_close($conn);

?>
