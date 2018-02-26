<!DOCTYPE html>

<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>My Bucket List</title>
        
        <link rel="stylesheet" type="text/css" href="css/explore.css">
        <link rel="stylesheet" type="text/css" href="addImg.css">
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        
        <!-- fontawesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        
        <!-- Bootstrap links -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        
       
    </head>

    <body>
        
        <div class="container-fullwidth">
          <div class="row">
            <div class="col mtitle">
              MY BUCKET LIST 
            </div>
          </div>
          <div class="row gallery">
            
              <?php
        // Include the database configuration file
        include 'db_init.php';
              
              $user = $_POST['user'];
              
              // Get images from the database
        $query = $db->query("SELECT *
FROM bucket_list WHERE user LIKE '$user%'");
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageURL = 'uploads/'.$row["img_path"];
                $place = $row["place_name"];
        ?>
            <div class="col-sm-">
                <div class="card">  
                    <div id="thumbpic">
                        <img id="img" class="img-fluid" alt="photo" src="<?php echo $imageURL; ?>" alt="" />
                        <div id="pictitle"><div id="addtobucket"><img src="assets/addbucketlist-icon.svg"/></div><p id="placename"><?php echo $place; ?></p><p id="locationname">Vancouver, BC</p>
                        <div id="ratings"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                    </div>
              </div>
            </div>
              </div>
        <?php }
        }else{ ?>
            <p>No image(s) found...</p>
        <?php } ?>
              
              
          </div>
            
        </div>
        <?php include 'navbar.php'; ?>

        
    </body>

    </html>

