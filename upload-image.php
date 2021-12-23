<?php

include 'includes/db_connx.php';
include 'includes/errors.php';

//set up variables
// target directory for images
$target_dir = "images/"; 
// file and pathname of image
$target_file = $target_dir . basename($_FILES["uploaded-image"]["name"]);
// getting file extension data
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// has the submit button been posted

if(isset($_POST["submit"])) {    

// check if image file extension is jpg, png, jpeg or gif

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {

     exit("Only JPG, JPEG, PNG & GIF files are allowed.");
}





    if (move_uploaded_file($_FILES["uploaded-image"]["tmp_name"], $target_file)) {

        echo "File uploaded successfully." ;
          
    } 
// comments go here - fully document this conditional statement
	else {
       
        exit("There was an error uploading your file.");
    }

} // end of isset()
?>

