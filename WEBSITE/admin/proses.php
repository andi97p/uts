<?php 
include 'database1.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['nis'],$_POST['nama'],$_POST['alamat'],$_POST['kelas']);
 	header("location:index.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['nis']);
	header("location:index.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['nis'],$_POST['nama'],$_POST['alamat'],$_POST['kelas']);
 	header("location:index.php");
 }
?>