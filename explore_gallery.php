<?php
include_once "database_init.php";


// Get images from the database
$query = $db->query("SELECT * FROM photo ORDER BY date DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["img_path"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>