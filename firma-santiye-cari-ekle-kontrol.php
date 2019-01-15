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
$santiyeid=$_POST['santiyeid'];
$firmaid=$_POST['firmaid'];
$tarih=$_POST['tarih'];
$alinan_cek=$_POST['alinan_cek'];
$alinannakit_tl=$_POST['alinannakit_tl'];
$kur=$_POST['kur'];
$alinannakit_usd=$_POST['alinannakit_usd']*$kur;
$hakedistutari_tl=$_POST['hakedistutari_tl'];


$ayarguncelle=$connection->query("insert into santiyeler_cari (santiyeid,tarih,alinan_cek,alinannakit_tl,alinannakit_usd,hakedistutari_tl,kur) values ('$santiyeid','$tarih','$alinan_cek','$alinannakit_tl','$alinannakit_usd','$hakedistutari_tl','$kur')") or die ("bir hata olustu...");

if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu</h2>";
	}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=firma-santiye-detay.php?id=$santiyeid&firmaid=$firmaid\"> ";
?>

</section>
          </div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>