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
$miktari=$_POST['miktari'];
$santiye_montajci_id=$_POST['santiye_montajci_id'];
$tarihi=$_POST['tarihi'];


$ayarguncelle=$connection->query("insert into santiyeler_montajcilar_avanslar (santiye_montajci_id,tarihi,miktari) values ('$santiye_montajci_id','$tarihi','$miktari')") or die ("bir hata olustu...");
	
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