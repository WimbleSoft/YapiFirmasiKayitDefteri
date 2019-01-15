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
$montajekibi=$_POST['montajekibi'];
$doseme_metraji=$_POST['doseme_metraji'];
$doseme_fiyati=$_POST['doseme_fiyati'];
$supurgelik_metraji=$_POST['supurgelik_metraji'];
$supurgelik_fiyati=$_POST['supurgelik_fiyati'];
$sove_metraji=$_POST['sove_metraji'];
$sove_fiyati=$_POST['sove_fiyati'];
$denizlik_metraji=$_POST['denizlik_metraji'];
$denizlik_fiyati=$_POST['denizlik_fiyati'];
$basamak_metraji=$_POST['basamak_metraji'];
$basamak_fiyati=$_POST['basamak_fiyati'];
$hakedis_toplami=$_POST['hakedis_toplami'];

$ayarguncelle=$connection->query("insert into santiyeler_montajcilar (santiyeid,montajekibi,doseme_metraji,doseme_fiyati,supurgelik_metraji,supurgelik_fiyati,sove_metraji,sove_fiyati,denizlik_metraji,denizlik_fiyati,basamak_metraji,basamak_fiyati,hakedis_toplami) values ('$santiyeid','$montajekibi','$doseme_metraji','$doseme_fiyati','$supurgelik_metraji','$supurgelik_fiyati','$sove_metraji','$sove_fiyati','$denizlik_metraji','$denizlik_fiyati','$basamak_metraji','$basamak_fiyati','$hakedis_toplami')") or die ("bir hata olustu...");
if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu</h2>";
	}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=firma-santiye-montajcilar.php?id=$santiyeid&firmaid=$firmaid\"> ";
?>

</section>
          </div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>