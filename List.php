<?php
include('session.php');
$mysearchkey="";
if(isset($_GET['searchkey'])) $mysearchkey = $_GET['searchkey'];
$sql = "SELECT username FROM barang WHERE username = '$login_session'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result,MYSQLI_ASSOC);
$idmem=$row['username'];
?>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div id="background-home">
	<div id="div1">
		<nav class="fixed-nav-bar" >
			<ul id="navbar" >
				<li class="nav-bar-home"><a href="home.php" >Home</a></li>
				<li class="nav-bar-upload"><a href="upload.php">Add Barang</a></li>

				<li class="nav-bar-logout"><a href="logout.php">Log Out</a></li>
				<li class="nav-bar-logout"><a href="#top" class="scroll active">List Barang</a></li>
				<li class="nav-bar-settings"><a href="settings.php">Settings</a></li>
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
	<div id="title-home"><h1>Items You Have Found!!!</h1></div>
	<div class="home" id="top">
		<?php
			
			if(is_null($mysearchkey)) {$sql = "SELECT * FROM barang where username='$idmem' ORDER BY id_barang DESC";}
			else {
				$sql = "SELECT * FROM barang WHERE nama_barang LIKE '%$mysearchkey' && username='$idmem' ORDER BY id_barang DESC";}
			
			$result = mysql_query($sql);
			while($row = mysql_fetch_assoc($result)){
				$rowid = $row['id_barang'];

				echo '<div class="home-img">
  						<a target="_blank" href="'.$row['images'].'">
    						<img src="'.$row['images'].'">
  						</a>
  						<div >'.$row['nama_barang'].'</div>
  						<div >'.$row['lokasi'].'</div>
  						<div >'.$row['keterangan'].'</div>
  						<div >'.$row['status'].'</div>
  						
					</div>';
				//echo $ruser;
			}
		?>
	</div>

	<footer>
		<div class="footer-home" style="margin-top:45px">
			<center>
			<b>
			<p><br><br>Copyright &copy; 2017 IMK B</p>
			</b>
			</center>
		</div>
	</footer>
</div>
</body>

</html>