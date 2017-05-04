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
				<li class="nav-bar-home"><a href="#top" class="scroll active" >Home</a></li>
				<li class="nav-bar-upload"><a href="upload.php">Add Barang</a></li>

				<li class="nav-bar-logout"><a href="logout.php">Log Out</a></li>
				<li class="nav-bar-search">
					<form action = "" method = "get">
						<input type = "text" name = "searchkey" class = "box" placeholder="Search by name"/>
						<input type = "text" name = "searchkey" class = "box" placeholder="Search by location"/>
						<input type = "submit" value = ""/>
					</form>
				</li>

				<li class="nav-bar-settings"><a href="settings.php">Settings</a></li>
				<li class="nav-bar-filter"><a href="filter.php">Advanced Search</a></li>

				
			</ul>
		</nav>
	</div>
	<div id="title-home"><h1>Items Have Been Found!!!</h1></div>
	<div class="home" id="top">
		<?php
			

				echo '<div class="home-img">
  						<a target="_blank" href="img/upload/dompet.jpg">
    						<img src="img/upload/dompet.jpg">
  						</a>

  						<div class="status"> Nama Barang: Dompet</div>
  						<div class="status"> Lokasi: Malang</div>
  						<div class="status"> Keterangan: Silahkan hubungi 089198282 jika merasa miliknya</div>
						<div class="status" > Status: Belum ditemukan</div>
					</div>';

				echo '<div class="home-img">
  						<a target="_blank" href="img/upload/handphone.jpg">
    						<img src="img/upload/handphone.jpg">
  						</a>

  						<div class="status"> Nama Barang: Handphone</div>
  						<div class="status"> Lokasi: Surabaya</div>
  						<div class="status"> Keterangan: Silahkan hubungi 089198282 jika merasa miliknya</div>
						<div class="status" > Status: Belum ditemukan</div>
					</div>';
					echo '<div class="home-img">
  						<a target="_blank" href="img/upload/jaket.jpg">
    						<img src="img/upload/jaket.jpg">
  						</a>

  						<div class="status"> Nama Barang: Jaket</div>
  						<div class="status"> Lokasi: Surabaya</div>
  						<div class="status"> Keterangan: Silahkan hubungi 089198282 jika merasa miliknya</div>
						<div class="status" > Status: Belum ditemukan</div>
					</div>';

					echo '<div class="home-img">
  						<a target="_blank" href="img/upload/jam.jpg">
    						<img src="img/upload/jam.jpg">
  						</a>

  						<div class="status"> Nama Barang: Jam tangan</div>
  						<div class="status"> Lokasi: Surabaya</div>
  						<div class="status"> Keterangan: Silahkan hubungi 089198282 jika merasa miliknya</div>
						<div class="status" > Status: Belum ditemukan</div>
					</div>';
			
				//echo $ruser;
			
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