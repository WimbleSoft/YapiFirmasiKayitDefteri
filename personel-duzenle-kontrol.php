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
$id=$_POST['id'];
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$tcno=$_POST['tcno'];
$maas=$_POST['maas'];
$baslamatarihi=$_POST['baslamatarihi'];
$adres=$_POST['adres'];
$yil=date('Y');

$ayarguncelle=$connection->query("UPDATE personel set ad='$ad',soyad='$soyad',tcno='$tcno',maas='$maas',baslamatarihi='$baslamatarihi',adres='$adres' where id='$id'") or die ("Bir Hata Oluştu");


if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu</h2>";
	}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=personel-detay.php?id=$id&yil=$yil\"> ";
?>

</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>