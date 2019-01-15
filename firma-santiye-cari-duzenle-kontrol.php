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
$santiyeid=$_POST['santiyeid'];
$firmaid=$_POST['firmaid'];
$tarih=$_POST['tarih'];
$tarih=$_POST['tarih'];
$kur=$_POST['kur'];
$alinan_cek=$_POST['alinan_cek'];
$alinannakit_tl=$_POST['alinannakit_tl'];
$alinannakit_usd=$_POST['alinannakit_usd']*$kur;
$hakedistutari_tl=$_POST['hakedistutari_tl'];

$ayarguncelle=$connection->query("UPDATE santiyeler_cari set santiyeid='$santiyeid',alinan_cek='$alinan_cek',kur='$kur',hakedistutari_tl='$hakedistutari_tl',alinannakit_usd='$alinannakit_usd',alinannakit_tl='$alinannakit_tl',tarih='$tarih' where id='$id'") or die ("Bir Hata Oluştu");


if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu</h2>";
	}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=firma-santiye-detay.php?id=$santiyeid&firmaid=$firmaid\"> ";
?>

</section>

<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>