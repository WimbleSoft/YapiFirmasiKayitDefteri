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
$firmaid=$_POST['firmaid'];
$santiyeadi=$_POST['santiyeadi'];
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$adres=$_POST['adres'];


$ayarguncelle=$connection->query("insert into firma_santiyeler (santiyeadi,firmaid,ad,soyad,adres) values ('$santiyeadi','$firmaid','$ad','$soyad','$adres')") or die ("bir hata olustu...");
		
		
	$vericek=$connection->query("select * from firma_santiyeler where firmaid='$firmaid' and ad='$ad' and soyad='$soyad' and santiyeadi='$santiyeadi'")->fetchAll(PDO::FETCH_ASSOC);
	foreach ($vericek as $vcek)
	{
	$santiyeid=$vcek['id'];
	
	}
	$ayarguncelle=$connection->query("insert into santiyeler_hakedis (santiyeid) values ('$santiyeid')") or die ("bir hata olustu...");
	$ayarguncelle=$connection->query("insert into santiyeler_teklif (santiyeid) values ('$santiyeid')") or die ("bir hata olustu...");
	$ayarguncelle=$connection->query("insert into santiyeler_fatura (santiyeid) values ('$santiyeid')") or die ("bir hata olustu...");



if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu</h2>";
	}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=firma-detay.php?id=$firmaid\"> ";
?>

</section>
          </div>
<!-- GİRİŞ KONTROL -->          
<?php include("ayak.php"); ?>
<?php	} ?>