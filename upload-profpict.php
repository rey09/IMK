<?php
include('session.php');
$sql = "SELECT username FROM user WHERE username = '$login_session'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result,MYSQLI_ASSOC);
$idmem=$row['username'];
$target_dir = "img/upload/";
$target_file = $target_dir."upl_".$idmem.".jpg";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["profpict"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
$file_type = $_FILES['profpict']['type'];
$allowed = array("image/jpeg","image/pjpeg");
// Allow certain file formats
if(!in_array($file_type, $allowed)) {
    echo "Sorry, only JPG is allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["profpict"]["tmp_name"], $target_file)) {
    $sql = "UPDATE user SET image='$target_file' WHERE username = '$idmem'";
	$result = mysql_query($sql);
    header("location:settings.php");
    }
    else {
            
           echo"eror";
       }
}
?>