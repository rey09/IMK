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
$mysearchkey="";
if(isset($_GET['searchkey'])) $mysearchkey = $_GET['searchkey'];
?>
<html>
<head>
	<title><?php echo $login_session;?></title>
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
				echo '<li class="nav-bar-myaccount" style="background:url("data:image/jpeg;base64,'.base64_encode( $profpic ).'") no-repeat 2px 11px transparent; background-size: 25px 25px;"><a href="account.php" class="active" >'.$login_session.'</a></li>'
				?>
				<li class="nav-bar-logout"><a href="logout.php">Log Out</a></li>
				<li class="nav-bar-settings"><a href="settings.php">Settings</a></li>
				<li class="nav-bar-upload"><a href="upload.php">Add Image</a></li>
				<li class="nav-bar-search">
					<form action = "" method = "get">
						<input type = "text" name="searchkey" class = "box" placeholder="Search tag"/>
						<input type = "submit" value = ""/>
					</form>
				</li>
			</ul>
		</nav>
	</div>
	<div class="home">
		<?php
			if(is_null($mysearchkey)) { $sql = "SELECT * FROM timeline where ID_member='$idmem' ORDER BY ID_timeline DESC";}
			else { $sql = "SELECT * FROM timeline WHERE caption LIKE '%$mysearchkey%' AND ID_member='$idmem' ORDER BY ID_timeline DESC";}
			$result = mysqli_query($db,$sql);
			while($row = mysqli_fetch_assoc($result)){
				echo '<div class="account-img">
  						<img src="data:image/jpeg;base64,'.base64_encode( $row['images'] ).'">
  						<div class="desc">'.$row['caption'].'</div>
  						<div class="editpict">
	  						<form action="edit.php" method="get">
								<input name="file_name" value="'.$row['ID_timeline'].'" type="hidden">
								<input type="submit" value="Edit" class="downloadsubmit">
							</form>
  						</div>
					</div>';
				//<a href="download.php"><img src="img/download.png"></a></div>
			}
		?>
	</div>
	<footer>
		<div class="footer">
			<p>Copyright &copy; 2016 Vania Maya Carissa</p>
		</div>
	</footer>
</body>

</html>