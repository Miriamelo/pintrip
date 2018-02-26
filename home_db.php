<?php
header("Access-Control-Allow-Origin: *");
    $servername = "pintrip.taliawalkey.ca";
    $dblogin = "talia185_pintrip";
    $password = "pintrip";
    $dbname = "talia185_pintrip_db";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $photo = $_POST['photo'];
            $lat = $_POST['lat'];
            $lng = $_POST['lng'];
            $place_name = $_POST['place_name'];
            $date = $_POST['date'];
            $ratings = $_POST['ratings'];
            $uid = $_POST['uid'];
          
            $sql = "SELECT lat, lng FROM photo WHERE user = '1'";
        
            $query = $conn->prepare($sql);
            $query->execute();
            $users = $query->fetchAll();
            
            foreach($users as $user){
                
                $myObj->lat = $user["lat"];
                $myObj->lng = $user["lng"];
                
                $myJSON = json_encode($myObj);
                
                echo $myJSON;
                                
                
                
                //$uarray[] = $user;
                //echo $user["lat"];
                //echo ", ";
                //echo $user["lng"];
                //echo '</br>';
            }
            print_r($uarray);
            
    } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "<p style='color: red;'>$error</p>";
    }
?>
