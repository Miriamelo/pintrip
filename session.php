<?php
    session_start();
	include_once 'database_init.php';

    $_SESSION['user'] = array();
    
    $oauth_uid = $_SESSION['user']['oauth_uid'];
    
    $sql = "SELECT user_id FROM Users WHERE oauth_uid = '$oauth_uid'";
    $result = $conn->query($sql);
    $arr = $result->fetchAll();

    $_SESSION['user']['oauth_uid'] = $arr[0]['oauth_uid'];
  
    var_dump($_SESSION);
//       if($_POST['type'] == "log"){
//            echo json_encode($user);
//            exit;
//        }
    
?>
