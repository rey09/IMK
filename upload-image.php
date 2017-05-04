<?php
include('session.php');
$sql = "SELECT ID_member FROM users WHERE username = '$login_session'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$idmem=$row['ID_member'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['photo'])){
        $mycaption = mysqli_real_escape_string($db,$_POST['caption']);
        $sql = "insert into timeline (ID_member,caption,upload_time,flag) values ('$idmem','$mycaption',current_timestamp,'0')";
        $result = mysqli_query($db,$sql);
        $sql = "SELECT ID_timeline FROM timeline WHERE flag = '0'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $idtim=$row['ID_timeline'];
        $target_dir = "img/upload/";
        $target_file = $target_dir."upl_".$idtim.".jpg";
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["photo"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        $image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
        $file_type = $_FILES['photo']['type'];
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
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
             $sql = "UPDATE timeline SET images='$image', flag='1', image='$target_file' WHERE ID_timeline = '$idtim'";
             $result = mysqli_query($db,$sql);
             header("location:home.php");
         } else {
            header("location:upload.php");
            //echo "ERROR";
        }
    }
}
else{
    header("location:upload.php");
}
}
?>