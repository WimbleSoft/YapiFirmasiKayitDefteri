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
$tedarikciid=$_POST['tedarikciid'];

$ad=$_POST['ad'];
$tarih=$_POST['tarih'];
$ad=$_POST['ad'];
$odenen_tl=$_POST['odenen_tl'];
$odenen_cek=$_POST['odenen_cek'];

$ayarguncelle=$connection->query("insert into tedarikciler_faturalari_odemeleri (tarih,tedarikciid,odenen_tl,odenen_cek) values ('$tarih','$tedarikciid','$odenen_tl','$odenen_cek')") or die ("bir hata olustu...");



if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu</h2>";
	}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=tedarikciler-faturalari-detay.php?id=$tedarikciid&ad=$ad\"> ";
?>

</section>
          </div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>