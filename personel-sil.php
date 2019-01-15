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
$delete = $connection->query("DELETE from personel WHERE id=".$id) or die("HATA!");
$delete = $connection->query("DELETE from personel_avanslar WHERE personelid=".$id) or die("HATA!");

if($delete){
$durum="<h2>Kayıt Silinmiştir</h2>";
}else{
$durum="<h2>Kayıt Silinememiştir<h2>";
}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=personel.php\"> ";
?>
</section> </div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>