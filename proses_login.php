<?php
include('koneksi.php');
session_start();
if(isset($_POST['login'])){
	$user = mysql_real_escape_string(htmlentities($_POST['email']));
	$pass = mysql_real_escape_string(htmlentities(md5($_POST['password'])));
 
	$perintah= "SELECT * FROM user WHERE (username='$user' OR email='$user' )AND password='$pass'"; 
	$sql=@mysql_query($perintah)or die(mysql_error()); //simpan variabel pilih user
	if(mysql_num_rows($sql) == 0){ //jika tidak ditemukan
		echo '<script language="javascript">alert("User tidak ada!"); document.location="index.php";</script>';
	}else{ //jika ditemukan
		$row = mysql_fetch_assoc($sql);
		if($row['level'] == 1){ // admin berdasarkan level, jika level 1 berarti admin
			$_SESSION['admin']=$user;
			echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="admin/index.php";</script>';
		}else{
			if($row['level']==2){
			$_SESSION['user']=$user; //berdasarkan kolom user
			echo '<script language="javascript">alert("Anda berhasil Login Sebagai User!"); document.location="user/index.php";</script>';
		}
		}
	}
}
?>