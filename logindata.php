<?php
	include_once 'database_init.php';
	//return $conn variable.

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
        $sql = "SELECT * FROM Photos";    
    
		$name = $_POST['name'];
		$email = $_POST['email'];
		$fb_Id = $_POST['fb_Id'];
    
        $sql = "INSERT INTO Users (oauth_uid, first_name, email) VALUES ('$fb_Id', '$name', '$score')";    
    
		$result = mysqli_query($conn , $sql) or die(mysqli_error());
    
		if ($result) {
			// header("LOCATION: fblogin.php?success");
			echo "successful entry";
		}else{
			echo "not successful";
		}
    
        $conn->exec($sql);

}else{
	echo "Try again Later";
}

 ?> 