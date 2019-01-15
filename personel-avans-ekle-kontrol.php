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
$tarih=$_POST['tarih'];
$ay=$_POST['ay'];
$maas=$_POST['maas'];
$asankisim=$_POST['asankisim'];
$avanslar=$_POST['avanslar'];
$toplamodenen=$_POST['toplamodenen'];
$yil=$_POST['yil'];
$asmayankisim=$avanslar-$asankisim;


if($maas<$toplamodenen){
	$ayarguncelle=$connection->query("insert into personel_avanslar (tarih,personelid,avanslar,ay,yil) values ('$tarih','$personelid','$asmayankisim','$ay','$yil')") or die ("bir hata olustu...");
	$ay=$ay+1;
	if($ay==13){
	$yil=$yil+1;
	$ay=1;
	}
	$ayarguncelle=$connection->query("insert into personel_avanslar (tarih,personelid,avanslar,ay,yil) values ('$tarih','$personelid','$asankisim','$ay','$yil')") or die ("bir hata olustu...");
}
else{
$ayarguncelle=$connection->query("insert into personel_avanslar (tarih,personelid,avanslar,ay,yil) values ('$tarih','$personelid','$avanslar','$ay','$yil')") or die ("bir hata olustu...");
}

if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu</h2>";
	}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=personel-avans-detay.php?personelid=$personelid&yil=$yil&ay=$ay\"> ";
?>

</section>
          </div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>