<?php
//sebelum query, load dulu library database-nya
include_once("libraries/Database.php");

class Model {
	function __construct()
	{
		$this->dbh = Database::getInstance();
	}


	function simpanData($nim,$nama)
	{
		$rs = $this->dbh->query("INSERT INTO mahasiswa (nim,nama) VALUES ('".$nim."','".$nama."')");
	}

	function lihatData()
	{

		$rs = $this->dbh->query("SELECT * FROM mahasiswa");
		return $rs;
	}

	function lihatDataDetail($id)
	{

		$rs = $this->dbh->query("SELECT * FROM mahasiswa WHERE id=".$id);
		return $rs->fetch();// kalau hasil query hanya satu, gunakan method fetch() bawaan PDO
	}
	
	
}

?>