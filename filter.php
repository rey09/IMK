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
// $error="";
?>
<html>
<head>
	<title>Filter</title>
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
				<li class="nav-bar-settings"><a href="settings.php">Settings</a></li>
				<li class="nav-bar-filter"><a href="#top" class="scroll active" >Advanced Search</a></li>
				
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
		<div class="col2"><h2>Filter Berdasarkan</h2></div>
		<div class="col6 div2-bg">
			<form action = "upload-image.php" method = "post" enctype="multipart/form-data">
				<label class="label-account">Nama Barang</label><input type = "text" name = "caption" class = "box"/><br /><br /><br />
				<label class="label-account">Lokasi </label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<select name="Lokasi">
					<option>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp---- Pilih Lokasi ----&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>
					<option>Surabaya</option>
					<option>Sidoarjo</option>
					<option>Madura</option>
					<option>Malang</option>
					<option>Mojokerto</option>
					</select><br />
				<label class="label-account">Keterangan</label><input type = "text" name = "caption" class = "box"/><br />
				<label class="label-account">Status</label><input type = "text" name = "caption" class = "box"/><br />
				<input type = "submit" value = " Cari "/><br />
			</form>
		</div>
		<div class="col3"></div>
	</div>
	<footer>
		<div class="footer-login">
			<p>Copyright &copy; 2017 IMK B</p>
		</div>
	</footer>
</body>
</html>