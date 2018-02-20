<?php
	include_once 'database_init.php';
	//return $conn variable.

        $sql = "SELECT * FROM Users";    
    
		$name = $_POST['name'];
		$email = $_POST['email'];
		$fb_Id = $_POST['fb_Id'];
        $picture = $_POST['picture'];
    
        $sql = "INSERT INTO Users (oauth_uid, first_name, email, picture) VALUES ('$fb_Id', '$name', '$email', '$picture')";    
    
		$result = mysqli_query($conn , $sql);
    
        $conn->exec($sql);

 ?> 