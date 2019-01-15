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
$adsoyad=$_POST['adsoyad'];
$kadi=$_POST['kadi'];
$sifre = md5($_POST['sifre']);
$eposta=$_POST['eposta'];
$telefon=$_POST['telefon'];


$ayarguncelle=($connection->query("UPDATE yoneticiler set adsoyad='$adsoyad',kadi='$kadi',sifre='$sifre',eposta='$eposta',telefon='$telefon' where id='$id'")) or die ("Bir Hata Oluştu");


if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu</h2>";
	}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=yoneticiler.php\"> ";
?>

</section>
          </div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>	
