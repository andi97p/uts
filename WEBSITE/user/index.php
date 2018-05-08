<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="form.css">

    <title>SISFO - SMPN 1 HARAPAN BANGSA</title>
  </head>
  <body>
  <!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

	<button type="button" class="btn btn-outline-primary"><b><?php echo $_SESSION['username']; ?></b> anda telah login sebagai User.</button>
	<button type="button" class="btn btn-outline-succes"><a href="logout.php">LOGOUT</a></button>
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-15"><center>SMPN 1 HARAPAN BANGSA</center></h1>
  </div>
  </div>
</nav>

<div class="alert alert-primary" role="alert">
  Data Siswa Smpn 1 Harapan Bangsa
</div>
<center>
<table class="table1">
 <tr style="background-color: yellow;">
 <table border="" width="1000px">


    <th>NIS</th><th>NAMA</th><th>ALAMAT</th><th>KELAS</th></tr>
    <?php
    include 'koneksi.php';
    $tbl_input = mysqli_query($koneksi, "SELECT * from tbl_input");
    $no=1;
    foreach ($tbl_input as $row){
        echo "<tr>
		
            <td>".$row['nis']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['alamat']."</td>
			<td>".$row['kelas']."</td>
              </tr>";
        $no++;
    }
    ?>
</table></center>

  
  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<!-- Footer  -->
  <div class="footer">
    Copyright &copy; 2018 Design By Andi Prayetno - Maulana Ramadhani
	
  </body>
</html>