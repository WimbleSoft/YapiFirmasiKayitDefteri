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
$firmaadi=$_POST['firmaadi'];
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$telefon=$_POST['telefon'];
$vd=$_POST['vd'];
$fax=$_POST['fax'];
$adres=$_POST['adres'];

$ayarguncelle=$connection->query("UPDATE firma set ad='$ad',soyad='$soyad',firmaadi='$firmaadi',telefon='$telefon',vd='$vd',fax='$fax',adres='$adres' where id='$id'") or die ("Bir Hata Oluştu");


if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu</h2>";
	}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=firma-detay.php?id=$id\"> ";
?>

</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>