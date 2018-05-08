<?php 
include 'database1.php';
$db = new database();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="form.css">

    <title>Info Siswa</title>
  </head>
  <body>
  <!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

	<button type="button" class="btn btn-outline-primary"><b><?php echo $_SESSION['username']; ?></b> anda telah login.</button>
	<button type="button" class="btn btn-outline-succes"><a href="logout.php">LOGOUT</a></button>
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-15"><center>SMPN 1 HARAPAN BANGSA</center></h1>
  </div>
  </div

  <!-- Untuk Update Data -->
  <center>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['nis']) as $d){
?>
<table>
	<tr>
		<td>NIS</td>
        <td><input type="text" name="nis" value="<?php echo $d['nis'] ?>">
		</tr></td>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
	<tr>
		<td>Kelas</td>
		<td><input type="text" name="kelas" value="<?php echo $d['kelas'] ?>"></td></tr>
	<tr><td colspan="2"><button class="btn btn-primary="submit" value="simpan">Simpan Perubahan</button>
                     <a class="btn btn-primary" href="index.php" role="button">Kembali</a></a></td></tr>
</table>
<?php } ?>
</form></center>


  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	
  </body>
</html>