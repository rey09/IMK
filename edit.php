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
$myidtimeline= $_GET['file_name'];
$sql = "select * from timeline where ID_timeline='$myidtimeline'";
$query = mysqli_query($db,$sql);
$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
$error="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$mycaption = mysqli_real_escape_string($db,$_POST['caption']);
    $sql = "update timeline set caption='$mycaption' where ID_timeline='$myidtimeline'";
    $result = mysqli_query($db,$sql);
    if($result){
    	header("location:account.php");
    } else{
    	$error="Failed to edit. ID Timeline= ".$myidtimeline.". With caption= ".$mycaption;
    }
}
?>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div id="div1">
		<nav class="fixed-nav-bar" >
			<ul id="navbar" >
				<li class="nav-bar-home"><a href="home.php">Home</a></li>
				<?php
				echo '<li class="nav-bar-myaccount" style="background:url("data:image/jpeg;base64,'.base64_encode( $profpic ).'") no-repeat 2px 11px transparent; background-size: 25px 25px;"><a href="account.php">'.$login_session.'</a></li>'
				?>
				<li class="nav-bar-logout"><a href="logout.php">Log Out</a></li>
				<li class="nav-bar-settings"><a href="settings.php">Settings</a></li>
			</ul>
		</nav>
	</div>
	<div class="div2">
		<div class="col1"></div>
		<div class="col2"><h2>Edit</h2></div>
		<div class="col6 div2-bg">
			<form action = "" method = "post">
				<label class="label-account">Image</label><img src="<?php echo $row['image']; ?>" id="profpic-setting"><br><br />
				<label class="label-account">Caption</label><input type = "text" name = "caption" class = "box" value="<?php echo $row['caption']; ?>"/><br /><br />
				<input type = "submit" value = " Save "/><br />
			</form>
			<div id="error"><?php echo $error; ?></div>
		</div>
		<div class="col3"></div>
	</div>
	<footer>
		<div class="footer-login">
			<p>Copyright &copy; 2016 Vania Maya Carissa</p>
		</div>
	</footer>
</body>
</html>