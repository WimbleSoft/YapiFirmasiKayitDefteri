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
$firmaid=$_POST['firmaid'];
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$adres=$_POST['adres'];
$santiyeadi=$_POST['santiyeadi'];

$ayarguncelle=$connection->query("UPDATE firma_santiyeler set santiyeadi='$santiyeadi',adres='$adres',soyad='$soyad',ad='$ad',firmaid='$firmaid' where id='$id'") or die ("Bir Hata Oluştu");


if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu</h2>";
	}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=firma-detay.php?id=$firmaid\"> ";
?>

</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>