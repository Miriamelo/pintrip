<?php
	include 'database_init.php';
	//return $conn variable.

if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$fb_Id = $_POST['fb_Id'];

		$query = "INSERT INTO Users(oauth_uid,first_name,email) VALUES ('".$fb_Id."','".$name."','".$email.")";
    
		$result = mysqli_query($conn , $query) or die(mysqli_error());
		if ($result) {
			// header("LOCATION: fblogin.php?success");
			echo "successful entry";
		}else{
			echo "not successful";
		}

}else{
	echo "Try again Later";
}

 ?> 