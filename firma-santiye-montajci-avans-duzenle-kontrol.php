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

$avansid=$_POST['avansid'];
$santiyeid=$_POST['santiyeid'];
$firmaid=$_POST['firmaid'];
$miktari=$_POST['miktari'];
$santiye_montajci_id=$_POST['santiye_montajci_id'];
$tarihi=$_POST['tarihi'];

$ayarguncelle=$connection->query("UPDATE santiyeler_montajcilar_avanslar set tarihi='$tarihi',miktari='$miktari',santiye_montajci_id='$santiye_montajci_id' where id='$avansid'") or die ("Bir Hata Oluştu");
	
if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu</h2>";
	}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=firma-santiye-montajci-detay.php?santiyeid=$santiyeid&firmaid=$firmaid&id=$santiye_montajci_id\"> ";
?>

</section>
          </div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>