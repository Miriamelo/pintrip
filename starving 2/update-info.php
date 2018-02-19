<?php

include_once "database_init.php";

$user_name = $_POST['user_name'];
$user_score = $_POST['user_score'];


$sql = "update user set user_score = ".$user_score." where user_name LIKE '$user_name%'";
$result = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
    console.log("Score updated");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>