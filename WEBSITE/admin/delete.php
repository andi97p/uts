<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$nis  = $_GET['nis'];
// query SQL untuk insert data
$query="DELETE from tbl_input where nis='$nis'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>