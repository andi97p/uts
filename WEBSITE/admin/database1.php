<?php 

class database{

	var $host = "localhost";
	var $uname = "infosisw_datamurid";
	var $pass = "andi04011997";
	var $db = "infosisw_DataMurid";

	function __construct(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);
	}

	function tampil_data(){
		$data = mysql_query("SELECT * FROM tbl_input");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nis,$nama,$alamat,$kelas){
		mysql_query("INSERT INTO tbl_input values('$nis','$nama','$alamat','$kelas')");
	}	
 
	function hapus($nis){
		mysql_query("delete from tbl_input where nis='$nis'");
	}
	function edit($nis){
	$data = mysql_query("select * from tbl_input where nis='$nis'");
	while($d = mysql_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
}

function update($nis,$nama,$alamat,$kelas){
	mysql_query("update tbl_input set nis='$nis',nama='$nama', alamat='$alamat', kelas='$kelas' where nis='$nis'");
}
}
?>