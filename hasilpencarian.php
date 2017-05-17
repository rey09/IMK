<?php
include('session.php');
$sql = "SELECT username FROM user WHERE username = '$login_session'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$idmem=$row['username'];

    
        $mynama = $_POST['nama_barang'];
        $mylokasi = $_POST['lokasi'];
        $mykategori = $_POST['kategori'];
        $mystatus = $_POST['status'];
        
?>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div id="background-home">
	<div id="div1">
		<nav class="fixed-nav-bar" >
			<ul id="navbar" >
				<li class="nav-bar-home"><a href="#top" class="scroll active" >Home</a></li>
				<li class="nav-bar-upload"><a href="upload.php">Add Barang</a></li>

				<li class="nav-bar-logout"><a href="logout.php">Log Out</a></li>
				<li class="nav-bar-list"><a href="List.php">List Barang</a></li>
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
	<div id="title-home"><h1>Items Have Been Found!!!</h1></div>
	<div class="home" id="top">
		<?php
			
						
			$sql = "SELECT * FROM barang WHERE (nama_barang LIKE '%$mynama%' AND lokasi LIKE '%$mylokasi%' AND kategori LIKE '%$mykategori%' AND status LIKE '%$mystatus%')ORDER BY id_barang DESC";
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
  						<div >'.$row['kategori'].'</div>
  						<div >'.$row['status'].'</div>
  						
					</div>';
				//echo $ruser;
			}
		?>
	</div>

	<footer>
		<div class="footer-home" style="margin-top:45px">
			<center>y
			<b>
			<p><br><br>Copyright &copy; 2017 IMK B</p>
			</b>
			</center>
		</div>
	</footer>
</div>
</body>

</html>