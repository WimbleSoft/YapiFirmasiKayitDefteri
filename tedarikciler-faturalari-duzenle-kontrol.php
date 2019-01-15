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
$tedarikciid=$_POST['tedarikciid'];
$tarih=$_POST['tarih'];
$tutar_tl=$_POST['tutar_tl'];


$ayarguncelle=$connection->query("UPDATE tedarikciler_faturalari set tedarikciid='$tedarikciid',tarih='$tarih',tutar_tl='$tutar_tl' where id='$id'") or die ("Bir Hata Oluştu");


if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu</h2>";
	}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=tedarikciler-detay.php?id=$tedarikciid\"> ";
?>

</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>