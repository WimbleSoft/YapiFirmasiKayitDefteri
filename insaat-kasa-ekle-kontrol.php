<?php
session_start(); 
if(!isset($_SESSION["login"])){
?>
<meta http-equiv="refresh" content="0;URL=giris.php">
<?php
} else
{
?>
<!-- GİRİŞ KONTROL -->
<?php include("kafa.php") ?>
<?php include("menu.php") ?>
<?php include("kontrol/veritabani.php") ?>


<section id="content">
<?php

$tarih=$_POST['tarih'];
$aciklama=$_POST['aciklama'];
$gelir_nakit=$_POST['gelir_nakit'];
$gelir_cek=$_POST['gelir_cek'];
$gider_nakit=$_POST['gider_nakit'];
$gider_cek=$_POST['gider_cek'];

$tarih2=$_POST['tarih2'];
$aciklama2=$_POST['aciklama2'];
$gelir_nakit2=$_POST['gelir_nakit2'];
$gelir_cek2=$_POST['gelir_cek2'];
$gider_nakit2=$_POST['gider_nakit2'];
$gider_cek2=$_POST['gider_cek2'];

$tarih3=$_POST['tarih3'];
$aciklama3=$_POST['aciklama3'];
$gelir_nakit3=$_POST['gelir_nakit3'];
$gelir_cek3=$_POST['gelir_cek3'];
$gider_nakit3=$_POST['gider_nakit3'];
$gider_cek3=$_POST['gider_cek3'];

$tarih4=$_POST['tarih4'];
$aciklama4=$_POST['aciklama4'];
$gelir_nakit4=$_POST['gelir_nakit4'];
$gelir_cek4=$_POST['gelir_cek4'];
$gider_nakit4=$_POST['gider_nakit4'];
$gider_cek4=$_POST['gider_cek4'];

$tarih5=$_POST['tarih5'];
$aciklama5=$_POST['aciklama5'];
$gelir_nakit5=$_POST['gelir_nakit5'];
$gelir_cek5=$_POST['gelir_cek5'];
$gider_nakit5=$_POST['gider_nakit5'];
$gider_cek5=$_POST['gider_cek5'];

if($aciklama!=NULL){
$ayarguncelle=$connection->query("insert into insaat_kasa  (aciklama,gelir_nakit,gelir_cek,gider_nakit,gider_cek,tarih) values (".$connection->quote($aciklama).",'$gelir_nakit','$gelir_cek','$gider_nakit','$gider_cek','$tarih')") or die ("bir hata olustu...");
}
if($aciklama2!=NULL){
$ayarguncelle2=$connection->query("insert into insaat_kasa (aciklama,gelir_nakit,gelir_cek,gider_nakit,gider_cek,tarih) values (".$connection->quote($aciklama2).",'$gelir_nakit2','$gelir_cek2','$gider_nakit2','$gider_cek2','$tarih2')") or die ("bir hata olustu...");
}
if($aciklama3!=NULL){
$ayarguncelle3=$connection->query("insert into insaat_kasa (aciklama,gelir_nakit,gelir_cek,gider_nakit,gider_cek,tarih) values (".$connection->quote($aciklama3).",'$gelir_nakit3','$gelir_cek3','$gider_nakit3','$gider_cek3','$tarih3')") or die ("bir hata olustu...");
}
if($aciklama4!=NULL){
$ayarguncelle4=$connection->query("insert into insaat_kasa (aciklama,gelir_nakit,gelir_cek,gider_nakit,gider_cek,tarih) values (".$connection->quote($aciklama4).",'$gelir_nakit4','$gelir_cek4','$gider_nakit4','$gider_cek4','$tarih4')") or die ("bir hata olustu...");
}
if($aciklama5!=NULL){
$ayarguncelle5=$connection->query("insert into insaat_kasa (aciklama,gelir_nakit,gelir_cek,gider_nakit,gider_cek,tarih) values (".$connection->quote($aciklama5).",'$gelir_nakit5','$gelir_cek5','$gider_nakit5','$gider_cek5','$tarih5')") or die ("bir hata olustu...");
}




if(isset($ayarguncelle) || isset($ayarguncelle2) || isset($ayarguncelle3) || isset($ayarguncelle4) || isset($ayarguncelle5)){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Hiç veri girmediniz..</h2>";
	}
echo"$durum";

		
		echo" <meta http-equiv=\"refresh\" content=\"0;url=insaat-kasa.php\"> ";


?>

</section>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>