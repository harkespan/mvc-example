<?php
//sebelum query, load dulu library database-nya
include_once("libraries/Database.php");

class Model {


	function simpanData($nim,$nama)
	{
		$dbh = Database::getInstance(); //digunakan setiap mau melakukan query
		$rs = $dbh->query("INSERT INTO mhs (nim,nama) VALUES ('".$nim."','".$nama."')");
	}

	function lihatData()
	{
		$dbh = Database::getInstance();
		$rs = $dbh->query("SELECT * FROM mhs");
		return $rs;
	}

	function lihatDataDetail($id)
	{
		$dbh = Database::getInstance();
		$rs = $dbh->query("SELECT * FROM mhs WHERE id=".$id);
		return $rs->fetch();// kalau hasil query hanya satu, gunakan method fetch() bawaan PDO
	}
	
	
}

?>