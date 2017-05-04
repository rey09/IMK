<?php
include('session.php');
$sql = "SELECT ID_member FROM users WHERE username = '$login_session'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$idmem=$row['ID_member'];
$sql="SELECT image FROM member WHERE ID_member='$idmem'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$profpic=$row['image'];
echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
?>