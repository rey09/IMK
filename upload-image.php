<?php
include('session.php');
$sql = "SELECT username FROM user WHERE username = '$login_session'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$idmem=$row['username'];

    
        $mynama = $_POST['nama_barang'];
        $mylokasi = $_POST['lokasi'];
        $myketerangan = $_POST['keterangan'];
        $mystatus = $_POST['status'];
        $sql = "insert into barang (username,nama_barang,lokasi,keterangan,status,flag) values ('$idmem','$mynama','$mylokasi','$myketerangan','$mystatus','0')";
        $result = mysql_query($sql);
        $sql = "SELECT id_barang FROM barang WHERE flag = '0'";
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        $idtim=$row['id_barang'];
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
             $sql = "UPDATE barang SET flag='1', images='$target_file' WHERE id_barang = '$idtim'";
             $result = mysql_query($sql);
             header("location:home.php");
         } else {
            
            header("location:upload.php");
            //echo "ERROR";
        }
    }


?>