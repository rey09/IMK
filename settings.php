<?php
//include('session.php');
// $sql = "SELECT ID_member FROM users WHERE username = '$login_session'";
// $result = mysqli_query($db,$sql);
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// $idmem=$row['ID_member'];
// $sql="SELECT image FROM member WHERE ID_member='$idmem'";
// $result = mysqli_query($db,$sql);
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// $profpic=$row['image'];
// $sql = "SELECT name FROM member WHERE ID_member = '$idmem'";
// $result = mysqli_query($db,$sql);
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// $name = $row['name'];
// $sql = "SELECT email FROM member WHERE ID_member = '$idmem'";
// $result = mysqli_query($db,$sql);
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// $email = $row['email'];
// $error="";
// if($_SERVER["REQUEST_METHOD"] == "POST") {
//       // username and password sent from form 

// 	$myusername = mysqli_real_escape_string($db,$_POST['username']);
// 	$mypassword = mysqli_real_escape_string($db,$_POST['password']); 
// 	$myname = mysqli_real_escape_string($db,$_POST['name']);
// 	$myemail = mysqli_real_escape_string($db,$_POST['email']);
// 	$rpassword = mysqli_real_escape_string($db,$_POST['rpassword']);
// 	$sql = "SELECT username FROM users WHERE username = '$myusername'";
// 	$result = mysqli_query($db,$sql);
// 	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// 	$count = mysqli_num_rows($result);
// 	if($mypassword==$rpassword){
// 		$sql = "UPDATE member SET name='$myname',email='$myemail' WHERE ID_member='$idmem'";
// 		$result = mysqli_query($db,$sql);
// 		$sql = "UPDATE users SET password='$mypassword' WHERE ID_member='$idmem'";
// 		$result = mysqli_query($db,$sql);
// 		if(!$result){
// 			echo "ERROR!!!!";
// 		}
// 	} else{
// 		$error="Password incorect";
// 	}
// }
?>
<html>
<head>
	<title>Setting</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div id="div1">
		<nav class="fixed-nav-bar" >
			<ul id="navbar" >
				<li class="nav-bar-home"><a href="home.php">Home</a></li>
				<li class="nav-bar-upload"><a href="upload.php">Add Barang</a></li>

				<li class="nav-bar-logout"><a href="logout.php">Log Out</a></li>
				<li class="nav-bar-search">
					<form action = "" method = "get">
						<input type = "text" name = "searchkey" class = "box" placeholder="Search by name"/>
						<input type = "text" name = "searchkey" class = "box" placeholder="Search by location"/>
						<input type = "submit" value = ""/>
					</form>
				</li>

				<li class="nav-bar-settings"><a href="#top" class="scroll active">Settings</a></li>
				<li class="nav-bar-filter"><a href="filter.php">Advanced Search</a></li>

				
			</ul>
		</nav>
	</div>
	<div class="div2">
		<div class="col1"></div>
		<div class="col2"><h2>Account Settings</h2></div>
		<div class="col6 div2-bg">
			<form action = "" method = "post">
				<label class="label-account">Name</label><input type = "text" name = "Name" class = "box" value="Name"/><br />
				<label class="label-account">Email</label><input type = "text" name = "Email" class = "box" value="Email"/><br />
				<label class="label-account">Alamat</label><input type = "text" name = "Username" class = "box" value="Username"/><br /><br />
				<label class="label-account">No Hp</label><input type = "password" name = "password" class = "box" placeholder="No Hp" /><br/><br />
				<label class="label-account">Password Baru</label><input type = "password" name = "rpassword" class = "box" placeholder="Password" /><br/><br />
				<label class="label-account">Repeat Password</label><input type = "password" name = "rpassword" class = "box" placeholder="Repeat Password" /><br/><br />
				
				<input type = "submit" value = " Save "/><br />
				<div id="delete-account">Getting tired? <a href="deleteaccount.php">Delete Account</a></div>
			</form>
			<!-- <div id="error"><?php echo $error; ?></div> -->
		</div>
		<div class="col3">
			<!--<?php
				echo '<img src="data:image/jpeg;base64,'.base64_encode( $profpic ).'" id="profpic-setting">';
			?>-->
			<form action = "upload-profpict.php" method = "post" class="form-profpict" enctype="multipart/form-data">
				<label class="label-profpict">Upload Profile Picture</label><input type = "file" name = "profpict" class = "box"/>
				<input type = "submit" value = " Upload "/><br />
			</form>
		</div>
	</div>
	<footer>
		<div class="footer">
			<p>Copyright &copy; 2017 IMK B</p>
		</div>
	</footer>
</body>
</html>