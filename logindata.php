<?php
	include_once 'database_init.php';
	//return $conn variable.

        $sql = "SELECT * FROM Photos";    
    
		$name = $_POST['name'];
		$email = $_POST['email'];
		$fb_Id = $_POST['fb_Id'];
    
        $sql = "INSERT INTO Users (oauth_uid, first_name, email) VALUES ('$fb_Id', '$name', '$email')";    
    
		$result = mysqli_query($conn , $sql);
    
        $conn->exec($sql);

 ?> 