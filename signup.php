<?php
//include("Config.php");
$error="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

	$myusername = mysqli_real_escape_string($db,$_POST['username']);
	$mypassword = mysqli_real_escape_string($db,$_POST['password']); 
	$myname = mysqli_real_escape_string($db,$_POST['name']);
	$myemail = mysqli_real_escape_string($db,$_POST['email']);
	$rpassword = mysqli_real_escape_string($db,$_POST['rpassword']);
	$sql = "SELECT username FROM users WHERE username = '$myusername'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	if($mypassword==$rpassword && $count==0){
		$sql = "insert into member (name,email,join_time) values ('$myname','$myemail',current_timestamp)";
		$result = mysqli_query($db,$sql);
		$sql = "select ID_member from member where name='$myname'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$rowid=$row['ID_member'];
		$sql = "insert into users (ID_member, username, password) values ('$rowid','$myusername','$mypassword')";
		$result = mysqli_query($db,$sql);
		if(!$result){
			echo "ERROR!!!!";
		} else {
			header("location:login.php");
		}
	} else if($mypassword!=$rpassword){
		$error="Password incorect";
	} else if($count!=0){
		$error="Username has been used";
	}
}
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div id="background-login">
		<div id="title-signup"><h1>Silahkan Daftar Dahulu</h1></div>
		<div id="box-isi-signup">
			<form action = "" method = "post">
				<input type = "text" name = "nama" class = "box" placeholder="Nama"/><br />
				<input type = "text" name = "email" class = "box" placeholder="Email"/><br />
								<input type = "text" name = "no. telepon" class = "box" placeholder="No. telepon"/><br />
				<input type = "text" name = "username" class = "box" placeholder="Username"/><br />
				<input type = "password" name = "password" class = "box" placeholder="Password" /><br/>
				<input type = "password" name = "password" class = "box" placeholder="Repeat Password" /><br/>
				<input type = "submit" value = " Sign Up "/><br />
				<div id="signup">Sudah punya akun? <a href="login.php">Silahkan login</a></div>
			</form>
			<div id="error"><?php echo $error; ?></div>
		</div>
	</div>
	<footer>
		<div class="footer-signup">
			<p>Copyright &copy; 2017 IMK B</p>
		</div>
	</footer>
</body>
</html>