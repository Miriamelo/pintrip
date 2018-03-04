<?php
    session_start();
    var_dump($_SESSION);
	include_once 'database_init.php';
	//return $conn variable.

        $sql = "SELECT * FROM Users";    
    
		$name = $_POST['name'];
		$email = $_POST['email'];
		$fb_Id = $_POST['fb_Id'];
        $picture = $_POST['picture'];
    
        $sql = "INSERT INTO Users (oauth_uid, first_name, email, picture) VALUES ('$fb_Id', '$name', '$email', '$picture')";  
        
        $_SESSION['user'] = array();
        $_SESSION['user']['email'] = $email;
        $_SESSION['user']['fb_id'] = $fb_Id;
        
        $s_email = $_SESSION['user']['email'];

		$result = mysqli_query($conn , $sql);
        $conn->exec($sql);
        
        // $sql = "SELECT user_id FROM Users WHERE email = '$_email'";
        // $sresult = $conn->exec($sql);
        // $arr = $sresult->fetchAll();
        // $_SESSION['user']['id'] = $arr[0]['id'];
        
        // var_dump($_SESSION['user']['id']);
        

 ?> 