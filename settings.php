<?php
include('session.php');
$sql = "SELECT username FROM user WHERE username = '$login_session'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result,MYSQLI_ASSOC);
$idmem=$row['username'];
$sql="SELECT image FROM user WHERE username='$idmem'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$profpic=$row['image'];
$sql = "SELECT nama FROM user WHERE username = '$idmem'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$name = $row['nama'];
$sql = "SELECT email FROM user WHERE username = '$idmem'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$email = $row['email'];
$sql = "SELECT no_telepon FROM user WHERE username = '$idmem'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$no_telepon = $row['no_telepon'];
$error="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

	$myusername = $_POST['username'];
	$mypassword = $_POST['password']; 
	$myname = $_POST['name'];
	$myemail = $_POST['email'];
	$mytelp = $_POST['no_telepon'];
	$rpassword = $_POST['rpassword'];
	$sql = "SELECT username FROM user WHERE username = '$myusername'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result,MYSQLI_ASSOC);
	$count = mysql_num_rows($result);
	if($mypassword==$rpassword){
		$sql = "UPDATE user SET nama='$myname',email='$myemail', no_telepon='$mytelp'WHERE username='$idmem'";
		$result = mysql_query($sql);
		
		if(!$result){
			echo "ERROR!!!!";
		}
	} else{
		$error="Password incorect";
	}
}
?>
<html>
<head>
	<title>Setting</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div id="div1">
		<nav class="fixed-nav-bar" >
			<ul id="navbar" >
				<li class="nav-bar-home"><a href="home.php" >Home</a></li>
				<li class="nav-bar-upload"><a href="upload.php">Add Barang</a></li>

				<li class="nav-bar-logout"><a href="logout.php">Log Out</a></li>
				<li class="nav-bar-logout"><a href="List.php">List Barang</a></li>
				<li class="nav-bar-settings"><a href="#top" class="scroll active" >Settings</a></li>
				<li class="nav-bar-filter"><a href="filter.php">Advanced Search</a></li>
				
				<li class="nav-bar-search">
					<form action = "" method = "get">
						<input type = "text" name = "searchkey" class = "box" placeholder="Search by name"/>
						<input type = "submit" value = ""/>
					</form>
				</li>
				

				
			</ul>
		</nav>
	</div>
	<div class="div2">
		<div class="col1"></div>
		<div class="col2"><h2>Account Settings</h2></div>
		<div class="col6 div2-bg">
			
			<div id="error"><?php echo $error; ?></div>
			<form action = "" method = "post">
				<label class="label-account">Name</label><input type = "text" name = "name" class = "box" value="<?php echo $name?>"/><br /><br />
				<label class="label-account">Email</label><input type = "text" name = "email" class = "box" value="<?php echo $email?>"/><br /><br />
				<label class="label-account">Nomor Telepon</label><input type = "text" name = "no_telepon" class = "box" value="<?php echo $no_telepon?>"/><br /><br />
				<label class="label-account">Username</label><input type = "text" name = "username" class = "box" value="<?php echo $login_session?>"/><br /><br />
				<label class="label-account">Password</label><input type = "password" name = "password" class = "box" placeholder="Password" /><br/><br />
				<label class="label-account">Repeat Password</label><input type = "password" name = "rpassword" class = "box" placeholder="Repeat Password" /><br/><br /><br>
				<input type = "submit" value = " Save "/><br /> <br>
<!-- 				<div id="delete-account">Getting tired? <a href="deleteaccount.php">Delete Account</a></div> -->
			</form>
			
		</div>
		<div class="col3">
			<?php
				echo '<img src="'.$profpic.'" id="profpic-setting">';
			?>
			<form action = "upload-profpict.php" method = "post" class="form-profpict" enctype="multipart/form-data">
				<label class="label-profpict">Upload Profile Picture</label><input type = "file" name = "profpict" class = "box"/>
				<input type = "submit" value = " Upload "/><br />
			</form>
		</div>
	</div>
	<footer>
		<div class="footer-home2">
			<p>Copyright &copy; 2017 IMK B</p>
		</div>
	</footer>
</body>
</html>