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
$personelid=$_POST['personelid'];
$avanslar=$_POST['avanslar'];
$ay=$_POST['ay'];
$yil=$_POST['yil'];
$tarih=$_POST['tarih'];


$ayarguncelle=$connection->query("UPDATE personel_avanslar set tarih='$tarih',ay='$ay',yil='$yil',avanslar='$avanslar' where id='$id'") or die ("Bir Hata Oluştu");


if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu</h2>";
	}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"3;url=personel-avans-detay.php?personelid=$personelid&yil=$yil&ay=$ay\"> ";
?>

</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>