<?php
include('session.php');
$sql = "SELECT ID_member FROM users WHERE username = '$login_session'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$idmem=$row['ID_member'];
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
$image = addslashes(file_get_contents($_FILES['profpict']['tmp_name']));
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
    $sql = "UPDATE member SET image='$image' WHERE ID_member = '$idmem'";
	$result = mysqli_query($db,$sql);
    header("location:settings.php");
}
?>