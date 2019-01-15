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
$santiyeid=$_GET['santiyeid'];
$delete = $connection->query("DELETE from santiyeler_cari WHERE id=".$id) or die("HATA!");
if($delete){
$durum="<h2>Kayıt Silinmiştir</h2>";
}else{
$durum="<h2>Kayıt Silinememiştir<h2>";
}
echo"$durum";


	$firmacek=$connection->query("select * from firma_santiyeler where id='$santiyeid'")->fetchAll(PDO::FETCH_ASSOC);
	foreach ($firmacek as $fcek)
	{
	$firmaid=$fcek['firmaid'];
	}
	echo" <meta http-equiv=\"refresh\" content=\"0;url=firma-santiye-detay.php?id=$santiyeid&firmaid=$firmaid\"> ";

?>
</section> </div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>