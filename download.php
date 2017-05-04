<?php
include("Config.php");
	if(isset($_POST['file_name']))
	{
		
		$file=$_POST['file_name'];
		$sql="select * from timeline where ID_timeline='$file'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$fname= $row['image'];
		header('Content-type: image/pjpeg');
		header('Content-Disposition: attachment; filename="'.$fname.'"');
		readfile($fname);
		exit();
	}
?>