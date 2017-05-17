<?php
include('session.php');
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
	<title>Upload</title>
<!-- 	<link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div id="div1">
		<nav class="fixed-nav-bar" >
			<ul id="navbar" >
				<li class="nav-bar-home"><a href="home.php" >Home</a></li>
				<li class="nav-bar-upload"><a href="#top" class="scroll active">Add Barang</a></li>

				<li class="nav-bar-logout"><a href="logout.php">Log Out</a></li>
				<li class="nav-bar-logout"><a href="List.php">List Barang</a></li>
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
	<div class="div2">
		<div class="col1"></div>
		<div class="col2"><h2>Upload Barang Temuan</h2></div>
		<div class="col6 div2-bg">
			<form action = "upload-image.php" method = "post" enctype="multipart/form-data">
				<div id="keterangan"><label class="label-account">Upload Image<a >*</a></label><input type = "file" name = "photo" class = "box upload"/><br><br /></div>
				<div id="keterangan"><label class="label-account">Nama<a >*</a></label><input type = "text" name = "nama_barang" class = "box"/><br /><br /><br /></div>
				<div id="keterangan"><label class="label-account">Lokasi<a >*</a></label>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<select name="lokasi">
					
					<option>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp---- Pilih Lokasi ----&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>
					<option> Bangkalan </option>
					<option> Banyuwangi </option>
					<option> Blitar </option>
					<option> Bojonegoro </option>	
					<option> Gresik </option>
					<option> Jombang </option>
					<option> Kediri </option>
					<option> Lamongan </option>	
					<option> Malang </option>
					<option> Mojokerto </option>
					<option> Nganjuk </option>
					<option> Pasuruan </option>	
					<option> Sidoarjo </option>
					<option> Surabaya </option>
					<option> Tulungagung </option>
							

					</select><br /><br /><br /></div>
				<div id="keterangan"><label class="label-account">Kategori<a >*</a></label>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<select name="kategori">
					
					<option>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp---- Pilih Kategori ----&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>
					<option> Aksesoris </option>
					<option> Kunci </option>
					<option> Handphone </option>
					<option> Kendaraan </option>	
					<option> Laptop </option>
					<option> Pakaian </option>
					<option> Sepatu </option>
					<option> Lainnya </option>		

					</select><br /><br /></div>
				<div id="keterangan"><label class="label-account">Keterangan<a >*</a></label><input type = "text" name = "keterangan" class = "box"/><br /><br /></div>
				<div id="keterangan"><label class="label-account">Status<a >*</a></label><input type = "text" name = "status" class = "box"/><br /><br /></div>
				<div id="keteranganbawah"> Label yang bertanda * harus diisi</div>
				<input type = "submit" value = " Upload "/><br />
				
			</form>
		</div>
		<div class="col3"></div>
	</div>
	
	<footer>
		<div class="footer-home2">
			<p>Copyright &copy; 2017 IMK B</p>
		</div>
	</footer>
</body>
</html>