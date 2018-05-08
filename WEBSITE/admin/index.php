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

	<button type="button" class="btn btn-outline-primary"><b><?php echo $_SESSION['username']; ?></b> anda telah login.</button>
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


    <th>NIS</th><th>NAMA</th><th>ALAMAT</th><th>KELAS</th><th>UPDATE</th></tr>
    	<?php
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $x['nis']; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['alamat']; ?></td>
		<td><?php echo $x['kelas']; ?></td>
		<td>
			<a href="edit.php?nis=<?php echo $x['nis']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?nis=<?php echo $x['nis']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table></center>


<div class="alert alert-danger" role="alert">
Form input untuk memasukkan data - data siswa ke dalam Dbase
</div>
<center>
<form action="proses.php?aksi=tambah" method="post">
            <table>
                <tr><td>NIS</td><td><input class="textfield" type="number" onkeyup="nis" name="nis" ></td></tr>
                <tr><td>NAMA</td><td><input class="textfield" type="text" name="nama"></td></tr>
				<tr><td>ALAMAT</td><td><input class="textfield" type="text" name="alamat"></td></tr>
				<tr><td>KELAS</td><td><input class="textfield" type="number" name="kelas"></td></tr>
                <tr><td colspan="4"><button class="btn btn-primary btn-lg" type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form><c/center>
		
		
<div class="alert alert-danger" role="alert">
Upload Informasi / Berita Sekolah
</div>
		<form action="aksi.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" name="upload" value="Unggah">
		*Maks 1 Mb . ekstensi jpg, png
	</form>
	
	<div class="alert alert-danger" role="alert">
	    Informasi / Berita Sekolah
</div>
  
  <?php  
$folder = "file"; //folder tempat gambar disimpan  
$handle = opendir($folder);  
echo '<table cellspacing="2" cellpadding="5">';  
echo '<tr>';  
$i = 1;  
while(false !== ($file = readdir($handle))){  
    if($file != '.' && $file != '..'){  
        echo '<td style="border:1px solid #000000;" align="center">  
            <img src="file/'.$file.'" width="100" /><br />  
            '.$file.'  
        </td>';  
        if(($i % 4) == 0){  
            echo '</tr><tr>';  
        }  
        $i++;  
    }  
}  
echo '</tr>';  
echo '</table>';  
?>
  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<!-- Footer  -->
  <div class="footer">
    Copyright &copy; 2018 Design By Andi Prayetno - Maulana Ramadhani
  </div>
	
  </body>
</html>