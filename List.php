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
	<title>List</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
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
				$sql = "SELECT * FROM barang WHERE nama_barang LIKE '%$mysearchkey' AND username='$idmem' ORDER BY id_barang DESC";}
			
			$result = mysql_query($sql);
			while($row = mysql_fetch_assoc($result)){
				$rowid = $row['id_barang'];

				echo '<div class="home-img">
  						<a data-toggle="modal" data-target="#'.$row['id_barang'].'">
    						<img src="'.$row['images'].'">
  						</a>  						
					</div>

					<div class="modal fade" id="'.$row['id_barang'].'" role="dialog" id="modal">
				    <div class="modal-dialog">
				    
				      <!-- Modal content-->
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">'.$row['nama_barang'].'</h4>
				        </div>
				        <div class="modal-body">
				        <div align="center">
				        <img style="width:300px; height:300px;" src="'.$row['images'].'">
				        </div>
				        <br>
				        <form action="updatebarang.php" method="POST">
				        <p class="col-lg-3">Nama barang</p><p class="col-lg-1">:</p><p id="box-update"><input  type="text"  name = "nama" class="boxupdate" value='.$row['nama_barang'].'></p>
				        <p class="col-lg-3">Lokasi</p><p class="col-lg-1">:</p><p id="box-update"><input type = "text" name = "lokasi" value='.$row['lokasi'].' ></p>
				        <p class="col-lg-3">Keterangan</p><p class="col-lg-1">:</p><p id="box-update"><input type = "text" name = "keterangan" value='.$row['keterangan'].'></p>
				        <p class="col-lg-3">Kategori</p><p class="col-lg-1">:</p><p id="box-update"><input type = "text" name = "kategori" value='.$row['kategori'].'></p>
				        <p class="col-lg-3">Status</p><p class="col-lg-1">:</p><p id="box-update"><input type = "text" name = "status" value='.$row['status'].'></p>
				        <div class="modal-footer">
				        	
				          <input type="button" value="Update" class="btn btn-success">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
				        </form>
				        </div>
				        
				        
				      </div>
				      
				    </div>
				 	</div>
				 ';
				//echo $ruser;
			}
		?>
	</div>

	<footer>
		<div class="footer-home">
			<p>Copyright &copy; 2017 IMK B</p>
		</div>
	</footer>
</div>
</body>

</html>