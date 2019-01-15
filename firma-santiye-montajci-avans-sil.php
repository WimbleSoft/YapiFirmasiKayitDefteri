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
$id=$_GET['id'];
$santiye_montajci_id=$_GET['santiye_montajci_id'];
$firmaid=$_GET['firmaid'];
$santiyeid=$_GET['santiyeid'];
$delete = $connection->query("DELETE from santiyeler_montajcilar_avanslar WHERE id=".$id) or die("HATA!");

if($delete){
$durum="<h2>Kayıt Silinmiştir</h2>";
}else{
$durum="<h2>Kayıt Silinememiştir<h2>";
}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=firma-santiye-montajci-detay.php?santiyeid=$santiyeid&firmaid=$firmaid&id=$santiye_montajci_id\"> ";
?>
</section> </div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>