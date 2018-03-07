<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style_home.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
 <div id="wrapper">
<!-- 
Andi Prayetno
-->
<div class="content">
	<header>
		<h1 class="judul">Sistem Data Siswa</h1>
		<center> <?php 
echo date('d / M / y');
echo "<br/>";
?></center>
	</header>

	<div class="menu">
	    <ul>
			
			<li><a href="admin/login.php">Login Admin</a> </li>
			<li><a href="user/login.php">Login User</a></li>
			
			
			
		</ul>
	</div>

	<div class="badan">


	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}

	 ?>

	</div>
</div>

<center><p> Sistem informasi Siswa 2018 - 2019</p>
<p><b> Andi Prayetno - Maulana Ramadhani</b></center>

</body>
</html>