<?php

session_start();
include("kontrol/veritabani.php");
$kadi	= $_POST['kadi'];
$sifre 	= md5($_POST['sifre']);
	if ((!$kadi =="") and (!$sifre =="")) {
		
		$sql = $connection->prepare("select * from yoneticiler where kadi='$kadi' and sifre='$sifre'  ");
		$query = $connection->query("select * from yoneticiler where kadi='{$kadi}' and sifre='{$sifre}'  ")->fetchAll(PDO::FETCH_ASSOC);
		$sql->execute();
		
		
		if($sql->rowCount()){
			$_SESSION["login"] = TRUE;
		
			foreach ($query as $dcek)
			{
			$_SESSION["girenkisi"] = $dcek['adsoyad'];
			}
			
			@header ("Location: index.php");
		}
		else {
			@header ("Location: giris.php");
		}
	} else {
		@header ("Location: giris.php");
	}
	
ob_end_flush();
?>