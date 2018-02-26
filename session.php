<?php
require_once('database_init.php');

session_start();
    $_SESSION['user'] = array();
    $_SESSION['user']['email'] = $_POST['email'];
    $_SESSION['user']['first_name'] = $_POST['first_name'];
    $_SESSION['user']['last_name'] = $_POST['last_name'];
    
   $g_email = $_SESSION['user']['email'];
    
    $sql = "SELECT id FROM login WHERE email = '$g_email'";
    $result = $conn->query($sql);
    $arr = $result->fetchAll();
    $_SESSION['user']['id'] = $arr[0]['id'];
  
//var_dump($_SESSION);
       if($_POST['type'] == "log"){
            echo json_encode($user);
            exit;
        }
    
?>
