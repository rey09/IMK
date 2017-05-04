<?php
include('session.php');
$sql = "SELECT ID_member FROM users WHERE username = '$login_session'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$idmem=$row['ID_member'];
$sql="DELETE FROM member WHERE ID_member='$idmem'";
$result = mysqli_query($db,$sql);
if(!$result){
	echo "ERROR";
} else {
	header("location: logout.php");
}
?>