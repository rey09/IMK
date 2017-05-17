<?php
include("Config.php");
session_start();
$error="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

	$myusername = $_POST['username'];
	$mypassword = $_POST['password']; 

	$sql = "SELECT username FROM user WHERE username = '$myusername' and password = '$mypassword'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
      //$active = $row['active'];

	$count = mysql_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
	if($count == 1) {
         //session_register("myemail");
		$_SESSION['login_user'] = $myusername;
		if($_POST['remem'] == 'remember'){
			setcookie('user',$myusername,time() + (86400 * 3));
		}
		header("location: home.php");
	}else {
		$error = "Your Login Name or Password is invalid";
	}
}
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div id="background-login">
		<div id="title-login"><h1>Lost & Found</h1></div>
		<div id="box-isi">
			<div id="error2"><?php echo $error; ?></div>
			<form action = "" method = "post">
				<input type = "text" name = "username" class = "box" placeholder="Username"/><br /><br />
				<input type = "password" name = "password" class = "box" placeholder="Password" /><br/><br />
				<input type = "submit" value = " Login "/><br />
				<input type = "checkbox" name="remem" value= "remember" class = "box">Remember Me<br>
				<div id="signup">Not register yet? <a href="signup.php">Sign Up here</a></div>
				<div id="signup">Forgot your password? <a href="signup.php">Here</a></div>
			</form>
			
		</div>
	</div>
	<footer>
		<div class="footer-signup">
			<p>Copyright &copy; 2017 IMK B</p>
		</div>
	</footer>
</body>
</html>